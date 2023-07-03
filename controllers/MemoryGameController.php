<?php

namespace app\controllers;

use Yii;
use app\extensions\MemoryExtController;
use app\models\MemoryGame;

class MemoryGameController extends MemoryExtController
{
    public function beforeAction($event)
    {
        $lang = Yii::$app->session['lang'];
        if(!$this->checkSessionAdmin())
        {
            $this->destroySession();
            $this->setStatusGuest('Guest', 0, $lang);
            $this->redirectToLogin();
        }
        
        return parent::beforeAction($event);
    }

//  ---------------------------------------- REDIRECT ----------------------------------------

    public function actionGame()
    {
        $difficulty = Yii::$app->session['difficulty'];
        $cardQty = Yii::$app->session['cardQty'];
        if ($difficulty == "" || $cardQty == "") 
        {
            return $this->redirect(['memory-home/home']);
        }
        else 
        {
            $this->layout = 'layoutUser';
            if (Yii::$app->session['gameStatus'] == 'New') 
            {
                return $this->render('@app/views/memoryGame/game.php', [
                    'adminId' => Yii::$app->session['adminId'],
                    'username' => Yii::$app->session['username'],
                    'difficulty' => Yii::$app->session['difficulty'],
                    'cardQty' => Yii::$app->session['cardQty'],
                    'gameStatus' => Yii::$app->session['gameStatus'],
                    'gameId' => Yii::$app->session['gameId'],
                    'game' => "abc",
                    'cardClassValue' => "abc",
                ]);
            }
            else if (Yii::$app->session['gameStatus'] == 'Continue')
            {
                $user_id = Yii::$app->session['adminId'];
                $game = new MemoryGame();
                $game->user_id = $user_id;
                $res = $game->getGame();
                if (count($res) > 0) {
                    $game->gameId = Yii::$app->session['gameId'];
                    $class = $game->getClass();
                }


                return $this->render('@app/views/memoryGame/game.php', [
                    'adminId' => Yii::$app->session['adminId'],
                    'difficulty' => Yii::$app->session['difficulty'],
                    'cardQty' => Yii::$app->session['cardQty'],
                    'gameId' => Yii::$app->session['gameId'],
                    'game' => json_encode($res),
                    'cardClassValue' => json_encode($class),
                    'gameStatus' => Yii::$app->session['gameStatus'],
                ]);
            }
        }
    }

//  ---------------------------------------- GET GAME ----------------------------------------
    public function actionGetGame()
    {
        $difficulty = Yii::$app->request->getBodyParam("difficulty");
        $cardQty = Yii::$app->request->getBodyParam("cardQty");
        $user_id = Yii::$app->session['adminId'];
        $game = new MemoryGame();
        $game->user_id = $user_id;
        $res = $game->getGame();
        if (count($res) > 0) {
            $temp = $res[0];
            $session = Yii::$app->session;
            $session->open();
            $session->set('difficulty', $difficulty);
            $session->set('cardQty', $cardQty);
            $session->set('gameStatus', 'Continue');
            $session->set('gameId', $temp['ID']);
            $session->close();
            return 0;
        }
        else {
            return 1;
        }
    }

//  ---------------------------------------- NEW GAME ----------------------------------------

    public function actionNewGame()
    {
        $difficulty = Yii::$app->request->getBodyParam("difficulty");
        $cardQty = Yii::$app->request->getBodyParam("cardQty");
        $user_id = Yii::$app->session['adminId'];
        $adminId = Yii::$app->session['adminId'];

        $game = new MemoryGame();
        $game->user_id = $user_id;
        $game->adminId = $adminId;
        $game->cardQty = $cardQty;
        $game->difficulty = $difficulty;
        $res = $game->newGame();
        if ($res['errNum'] == "0") {
            $session = Yii::$app->session;
            $session->open();
            $session->set('difficulty', $difficulty);
            $session->set('cardQty', $cardQty);
            $session->set('gameStatus', 'New');
            $session->set('gameId', $res['gameId']);
            $session->close();
            for ($i=0; $i<$cardQty; $i++)
            {
                $game->class = 'untile';
                $class = $game->newCardClass();
                if ($class['errNum'] == "1"){
                    return $class;
                }
            }
            return true;
        }
        else {
            return json_encode($res);
        }
    }

//  ---------------------------------------- UPDATE GAME ----------------------------------------
    public function actionUpdateGame()
    {
        $gameId = Yii::$app->request->getBodyParam("gameId");
        $minute = Yii::$app->request->getBodyParam("minute");
        $second = Yii::$app->request->getBodyParam("second");
        $score = Yii::$app->request->getBodyParam("score");
        $move = Yii::$app->request->getBodyParam("move");
        $game_status = Yii::$app->request->getBodyParam("game_status");
        $date_finish = Yii::$app->request->getBodyParam("date_finish");
        $cardClass = Yii::$app->request->getBodyParam("cardClass");
        $card_value = Yii::$app->request->getBodyParam("cardVal");
        $user_id = Yii::$app->session['adminId'];
        $adminId = Yii::$app->session['adminId'];
        $game = new MemoryGame();
        $game->user_id = $user_id;
        $game->gameId = $gameId;
        $game->minute = $minute;
        $game->second = $second;
        $game->move = $move;
        $game->score = $score;
        $game->game_status = $game_status;
        $game->date_finish = $date_finish;
        $game->card_value = $card_value;
        $game->adminId = $adminId;
        $res = $game->updateGame();
        if ($res['errNum'] == "0") {
            $class = $game->getClass();
            $game->cardClass = $cardClass;
            for ($i=0; $i < count($cardClass) ; $i++)
            {
                $temp = $class[$i];
                $game->classId = $temp['ID'];
                $game->class = $cardClass[$i];
                $game->card_value = $card_value[$i];
                $classRes = $game->updateClass();
                if ($classRes['errNum'] == 1) {
                    return $classRes;
                }
            }
            return true;
        }
        else {
            return $res;
        }
    }

    public function actionNewMove()
    {
        $gameId = Yii::$app->request->getBodyParam("gameId");
        $move = Yii::$app->request->getBodyParam("move");
        $adminId = Yii::$app->session['adminId'];
        $game = new MemoryGame();
        $game->gameId = $gameId;
        $game->move = $move;
        $game->adminId = $adminId;
        $res = $game->newMove();
        return json_encode($res);
    }

//  ---------------------------------------- MISC ----------------------------------------

    public function actionGetAjojing()
    {
        $title = Yii::$app->request->getBodyParam("title");
        $user_id = Yii::$app->request->getBodyParam("userId");
        $adminId = Yii::$app->session['adminId'];
        $game = new MemoryGame();
        $game->title = $title;
        $game->user_id = $user_id;
        $game->adminId = $adminId;
        $res = $game->getAchivement();
        return json_encode($res);
    }
}