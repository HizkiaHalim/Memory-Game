<?php

namespace app\controllers;

use Yii;
use app\extensions\MemoryExtController;
use app\models\MemoryUser;

class MemoryUserController extends MemoryExtController
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

    public function actionUserPage()
    {
        $this->layout = 'layoutUser';
        $user = new MemoryUser();
        $user->username = Yii::$app->session['username'];
        $user->userId = Yii::$app->session['adminId'];
        $result = $user->getUser();
        $achieve = $user->getAchievement();
        return $this->render('@app/views/memoryGame/userPage.php', [
            'adminId' => Yii::$app->session['adminId'],
            'username' => Yii::$app->session['username'],
            'userDetail' => json_encode($result),
            'achievement' => json_encode($achieve)
        ]);
    }

//  ---------------------------------------- EDIT ----------------------------------------

    public function actionEditProfile()
    {
        $id = Yii::$app->request->getBodyParam("id");
        $email = Yii::$app->request->getBodyParam("email");
        $username = Yii::$app->request->getBodyParam("username");
        $password = Yii::$app->request->getBodyParam("password");
        $realPassword = Yii::$app->request->getBodyParam("realPassword");
        $adminId = Yii::$app->request->getBodyParam("adminId");
        $user = new MemoryUser();
        $user->id = $id;
        $user->email = $email;
        $user->username = $username;
        $user->password = $password;
        $user->adminId = $adminId;
        $user->scenario = 'scenarioEditUser';

        // $verification = 1;
        $verification = password_verify($password, $realPassword);
        $user->password = password_hash($password, PASSWORD_DEFAULT);

        if ($verification == 1) 
        {
            if ($user->validate()) 
            {
                $userEdit = $user->editProfile();
                if ($userEdit['errNum'] == "0") 
                {
                    $lang = Yii::$app->session['lang'];
                    $this->destroySession();
                    $this->setStatusAdmin('Admin', $id, $username, $lang );
                    return 0;
                }
                else
                {
                    return json_encode($userEdit);
                }

            }
            else
            {
                return json_encode($user->errors);
            }
        }
        else
        {
            return 1;
        }
    }

    public function actionEditPassword()
    {
        $id = Yii::$app->request->getBodyParam("id");
        $email = Yii::$app->request->getBodyParam("email");
        $username = Yii::$app->request->getBodyParam("username");
        $password = Yii::$app->request->getBodyParam("password");
        $oldPassword = Yii::$app->request->getBodyParam("oldPassword");
        $realPassword = Yii::$app->request->getBodyParam("realPassword");
        $adminId = Yii::$app->request->getBodyParam("adminId");
        $user = new MemoryUser();
        $user->id = $id;
        $user->email = $email;
        $user->username = $username;
        $user->password = $password;
        $user->adminId = $adminId;
        $user->scenario = 'scenarioEditUser';

        // $verification = 1;
        $verification = password_verify($oldPassword, $realPassword);
        $user->password = password_hash($password, PASSWORD_DEFAULT);

        if ($verification == 1) 
        {
            if ($user->validate()) 
            {
                $userEdit = $user->editProfile();
                if ($userEdit['errNum'] == "0") 
                {
                    $lang = Yii::$app->session['lang'];
                    $this->destroySession();
                    $this->setStatusAdmin('Admin', $id, $username, $lang);
                    return 0;
                }
                else
                {
                    return json_encode($userEdit);
                }

            }
            else
            {
                return json_encode($user->errors);
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