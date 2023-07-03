<?php

namespace app\models;

use Yii;
use yii\base\Model;
use PDO;

class MemoryLogin extends Model
{
    public $errNum = 0;
    public $errStr = '';
    public $outId = 0;
    public $email, $password, $adminId, $username;
    public $title, $hint, $userId;

    public function rules()
    {
        return[
            // rule login
            [['email','password'], 'required', 'on' => ['scenarioLogin']],
            [['email','password'], 'string', 'length' => [1, 256], 'on' => ['scenarioLogin']],
            [['email'] , 'email' , 'on'  => ['scenarioLogin']],
            // rule add user
            [['email', 'username','password','adminId'], 'required', 'on' => ['scenarioAddUser']],
            [['email', 'username', 'password'], 'string', 'length' => [1, 256], 'on' => ['scenarioAddUser']],
            [['email'] , 'email' , 'on'  => ['scenarioAddUser']],
        ];
    }

    public function addUser()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_user_insert
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        out_id			            => :outId,
                        in_email                    => :email,
                        in_username                 => :username,
                        in_password                 => :password,
                        in_admin_id 	            => :adminId
                    );
                END;    
        ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':outId', $this->outId, PDO::PARAM_INT, 7);
        $st->bindParam(':email', $this->email);
        $st->bindParam(':username', $this->username);
        $st->bindParam(':password', $this->password);
        $st->bindParam(':adminId', $this->adminId);
        // die($st->getRawSql());
        $tr = $db->beginTransaction();
        $st->execute();
        $tr->commit();// bisa ganti rollback()
        
        return [
            'outId' => $this->outId,
            'errNum' => $this->errNum,
            'errStr' => $this->errStr
        ];
    }

    public function addAchievement()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                sp_hiz_memory_achieve_insert
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_title			        => :title,
                        in_user_id                  => :user_id,
                        in_hint                     => :hint,
                        in_admin_id 	            => :adminId
                    );
                END;    
        ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':title', $this->title);
        $st->bindParam(':user_id', $this->userId);
        $st->bindParam(':hint', $this->hint);
        $st->bindParam(':adminId', $this->adminId);
        // die($st->getRawSql());
        $tr = $db->beginTransaction();
        $st->execute();
        $tr->commit();// bisa ganti rollback()
        
        return [
            'errNum' => $this->errNum,
            'errStr' => $this->errStr
        ];
    }

    public function verifyCredential()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT 
                    ID, 
                    EMAIL,
                    USERNAME, 
                    PASSWORD
                FROM 
                    HIZ_MEMORY_USER
                WHERE 
                    UPPER(EMAIL) = UPPER(:email)
                    AND
                    STATUS = 1";
        $st = $db->createCommand($sql);
        $st->bindParam(':email', $this->email);
        $result = $st->queryAll();//queryOne, queryScalar
        return $result;
    }

}