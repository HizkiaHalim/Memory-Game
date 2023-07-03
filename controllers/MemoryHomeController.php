<?php

namespace app\controllers;

use Yii;
use app\extensions\MemoryExtController;
use app\models\MemoryGame;

class MemoryHomeController extends MemoryExtController
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

    public function actionHome()
    {
        $this->layout = 'layoutUser';
        $game = new MemoryGame();
        $game->user_id = Yii::$app->session['adminId'];
        $res = $game->getGame5();
        return $this->render('@app/views/memoryGame/home.php', [
            'adminId' => Yii::$app->session['adminId'],
            'username' => Yii::$app->session['username'],
            'game' => json_encode($res),
        ]);
    }

//  ---------------------------------------- MISC ----------------------------------------

    public function actionGetAchievement()
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