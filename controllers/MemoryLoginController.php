<?php

namespace app\controllers;

use Yii;
use app\extensions\MemoryExtController;
use app\models\MemoryLogin;

class MemoryLoginController extends MemoryExtController
{
    public function beforeAction($event)
    {
        $lang = Yii::$app->session['lang'];
        if(!$this->checkSessionGuest())
        {
            $this->destroySession();
            $this->redirectToLogin();
        }
        $this->setStatusGuest('Guest', 0, $lang);
        
        return parent::beforeAction($event);
    }

//  ---------------------------------------- REDIRECT ----------------------------------------

    public function actionLogin()
    {
        $this->layout = 'layoutGuest';
        return $this->render('@app/views/memoryGame/login.php', [
            'adminId' => Yii::$app->session['adminId']
        ]);
    }

    public function actionRegister()
    {
        $this->layout = 'layoutGuest';
        return $this->render('@app/views/memoryGame/register.php', [
            'adminId' => Yii::$app->session['adminId']
        ]);
    }

//  ---------------------------------------- ADD ----------------------------------------

    public function actionAddUser()
    {
        $email = Yii::$app->request->getBodyParam("email");
        $username = Yii::$app->request->getBodyParam("username");
        $password = Yii::$app->request->getBodyParam("password");
        $adminId = Yii::$app->request->getBodyParam("adminId");
        $login = new MemoryLogin();
        $login->email = $email;
        $login->username = $username;
        $login->password = $password;
        $login->adminId = $adminId;
        $login->scenario = 'scenarioAddUser';

        $login->password = password_hash($password, PASSWORD_DEFAULT);

        if ($login->validate()) 
        {
            $loginAdd = $login->addUser();
        
            return json_encode($loginAdd);
        }
        else
        {
            return json_encode($login->errors);
        }
    }

    public function actionAddAchievement()
    {
        $title = Yii::$app->request->getBodyParam("title");
        $hint = Yii::$app->request->getBodyParam("hint");
        $userId = Yii::$app->request->getBodyParam("userId");
        $adminId = Yii::$app->request->getBodyParam("adminId");
        $login = new MemoryLogin();
        $login->title = $title;
        $login->hint = $hint;
        $login->userId = $userId;
        $login->adminId = $adminId;

        for ($i=0; $i < count($title) ; $i++)
        {
            $login->title = $title[$i];
            $login->hint = $hint[$i];
            $login->userId = $userId;
            $login->adminId = $adminId;
            $loginAdd = $login->addAchievement();
            if ($loginAdd['errNum'] == 1) {
                return json_encode($loginAdd);
            }
        }
        return json_encode($loginAdd);
    }

// ------------------------------------------ GET ---------------------------------------------
    
    public function actionVerifyLogin()
    {
        $email = Yii::$app->request->getBodyParam("email");
        $password = Yii::$app->request->getBodyParam("password");
        $login = new MemoryLogin();
        $login->email = $email;
        $login->scenario = 'scenarioLogin';
        $verifyCredential = json_encode($login->verifyCredential());
        if ($verifyCredential != '[]') 
        {
            $res = json_decode($verifyCredential);
            $verification = password_verify($password, $res[0]->PASSWORD);
            if ($verification == 1) 
            {
                $lang = Yii::$app->session['lang'];
                $this->destroySession();
                $this->setStatusAdmin('Admin', $res[0]->ID, $res[0]->USERNAME, $lang);
                return 0;
            }
            else
            {
                return 1;
            }
        }
        else 
        {
            return 1;
        }

    }

//  ---------------------------------------- SET LANGUAGE ----------------------------------------

    public function actionSetLang()
    {
        $lang = Yii::$app->request->getBodyParam("lang");
        $oldLang = Yii::$app->session['lang'];
        $this->setSessionLang($lang);
        if ($oldLang != $lang) 
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
}