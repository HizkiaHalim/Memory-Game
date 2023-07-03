<?php

namespace app\models;

use Yii;
use yii\base\Model;
use PDO;

class MemoryUser extends Model
{
    public $errNum = 0;
    public $errStr = '';
    public $username, $password, $adminId, $email, $id, $userId;

    public function rules()
    {
        return[
            // rule edit user
            [['id', 'email', 'username','password','adminId'], 'required', 'on' => ['scenarioEditUser']],
            [['email', 'username', 'password'], 'string', 'length' => [1, 256], 'on' => ['scenarioEditUser']],
            [['email'] , 'email' , 'on'  => ['scenarioEditUser']],
        ];
    }

    public function getUser()
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
                    USERNAME = :username
                    AND
                    STATUS = 1";
        $st = $db->createCommand($sql);
        $st->bindParam(':username', $this->username);
        $result = $st->queryAll();//queryOne, queryScalar
        return $result;
    }

    public function getAchievement()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT 
                    TITLE, 
                    HINT,
                    OBTAIN_STATUS
                FROM 
                    HIZ_MEMORY_ACHIEVEMENT
                WHERE 
                    USER_ID = :userId
                    AND
                    STATUS = 1";
        $st = $db->createCommand($sql);
        $st->bindParam(':userId', $this->userId);
        $result = $st->queryAll();//queryOne, queryScalar
        return $result;
    }

    public function editProfile()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_user_update
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_id                       => :id,
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
        $st->bindParam(':id', $this->id);
        $st->bindParam(':email', $this->email);
        $st->bindParam(':username', $this->username);
        $st->bindParam(':password', $this->password);
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
    
}