<?php

namespace app\controllers;

use Yii;
use app\extensions\MemoryExtController;
use app\models\MemoryLeaderboard;

class MemoryLeaderboardController extends MemoryExtController
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

    public function actionLeaderboard()
    {
        $this->layout = 'layoutUser';
        $game = new MemoryLeaderboard();
        $res = $game->getGame();
        $user = $game->getUser();
        return $this->render('@app/views/memoryGame/leaderboard.php', [
            'adminId' => Yii::$app->session['adminId'],
            'username' => Yii::$app->session['username'],
            'game' => json_encode($res),
            'user' => json_encode($user),
        ]);
    }

}

