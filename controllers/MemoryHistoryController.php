<?php

namespace app\controllers;

use Yii;
use app\extensions\MemoryExtController;
use app\models\MemoryHistory;

class MemoryHistoryController extends MemoryExtController
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

    public function actionHistory()
    {
        $this->layout = 'layoutUser';
        $game = new MemoryHistory();
        $game->user_id = Yii::$app->session['adminId'];
        $res = $game->getGame();
        $moveset = $game->getMove();
        return $this->render('@app/views/memoryGame/history.php', [
            'adminId' => Yii::$app->session['adminId'],
            'username' => Yii::$app->session['username'],
            'game' => json_encode($res),
            'moveset' => json_encode($moveset),
        ]);
    }
}