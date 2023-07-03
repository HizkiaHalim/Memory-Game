<?php

namespace app\models;

use Yii;
use yii\base\Model;
use PDO;

class MemoryGame extends Model
{
    public $errNum = 0;
    public $errStr = '';
    public $gameId = 0;
    public $user_id, $date_start, $adminId, $date_finish, $minute, $second, $score, $cardQty, $move, $difficulty, $game_status, $class, $classId, $card_value, $title;
    public $cardClass;

//-----------------------------------------GET GAME--------------------------------------
    public function getGame()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT
                    ID,
                    USER_ID,
                    DATE_START,
                    MINUTE,
                    SECOND,
                    SCORE,
                    CARDQTY,
                    MOVE,
                    DIFFICULTY
                FROM 
                    HIZ_MEMORY_GAME 
                WHERE 
                    status = 1
                    AND game_status = 'incomplete'
                    AND user_id = :user_id";
        $st = $db->createCommand($sql);
        $st->bindParam(':user_id', $this->user_id);
        $game = $st->queryAll();

        return $game;
    } 

    public function getGame5()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT
                    ID,
                    USER_ID,
                    DATE_START,
                    MINUTE,
                    SECOND,
                    SCORE,
                    CARDQTY,
                    MOVE,
                    DIFFICULTY
                FROM 
                    HIZ_MEMORY_GAME 
                WHERE 
                    status = 1
                    AND game_status = 'complete'
                    AND user_id = :user_id
                    AND ROWNUM <= 5
                ORDER BY
                    ID DESC";
        $st = $db->createCommand($sql);
        $st->bindParam(':user_id', $this->user_id);
        $game = $st->queryAll();

        return $game;
    } 

    public function getClass()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT
                    M.ID AS GAME_ID, 
                    N.ID, 
                    N.CLASS,
                    N.CARD_VALUE
                FROM 
                    HIZ_MEMORY_GAME M
                LEFT JOIN 
                    HIZ_MEMORY_CARD_CLASS N 
                    ON 
                    M.ID = N.GAME_ID 
                WHERE 
                    N.status = 1
                    AND M.ID = :game_id
                ORDER BY
                    ID";
        $st = $db->createCommand($sql);
        $st->bindParam(':game_id', $this->gameId);
        $class = $st->queryAll();

        return $class;
    }

// ----------------------------------------NEW GAME--------------------------------------
    public function newGame()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_game_insert
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        out_game_id			        => :outGameId,
                        in_user_id                  => :user_id,
                        in_cardQty                  => :cardQty,
                        in_difficulty               => :difficulty,
                        in_admin_id 	            => :adminId
                    );
                END;    
            ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':outGameId', $this->gameId, PDO::PARAM_INT, 5);
        $st->bindParam(':user_id', $this->user_id);
        $st->bindParam(':cardQty', $this->cardQty);
        $st->bindParam(':difficulty', $this->difficulty);
        $st->bindParam(':adminId', $this->adminId);
        // die($st->getRawSql());
        $tr = $db->beginTransaction();
        $st->execute();
        $tr->commit();// bisa ganti rollback()
        return [
            'errNum' => $this->errNum,
            'errStr' => $this->errStr,
            'gameId' => $this->gameId
        ];
    }

    public function newCardClass()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_class_insert
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_game_id			        => :gameId,
                        in_class                    => :class,
                        in_admin_id 	            => :adminId
                    );
                END;    
            ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':gameId', $this->gameId);
        $st->bindParam(':class', $this->class);
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

//-----------------------------------------UPDATE GAME--------------------------------------
    public function updateGame()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_game_update
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_id			            => :id,
                        in_user_id                  => :user_id,
                        in_minute                   => :minute,
                        in_second                   => :second,
                        in_score                    => :score,
                        in_move                     => :move,
                        in_game_status              => :game_status,
                        in_date_finish              => :date_finish,
                        in_admin_id 	            => :adminId
                    );
                END;    
            ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':id', $this->gameId);
        $st->bindParam(':user_id', $this->user_id);
        $st->bindParam(':minute', $this->minute);
        $st->bindParam(':second', $this->second);
        $st->bindParam(':score', $this->score);
        $st->bindParam(':move', $this->move);
        $st->bindParam(':game_status', $this->game_status);
        $st->bindParam(':date_finish', $this->date_finish);
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

    public function updateClass()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_class_update
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_id			            => :id,
                        in_game_id                  => :game_id,
                        in_class                    => :class,
                        in_card_value               => :card_value,
                        in_admin_id 	            => :adminId
                    );
                END;    
            ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':id', $this->classId);
        $st->bindParam(':game_id', $this->gameId);
        $st->bindParam(':class', $this->class);
        $st->bindParam(':card_value', $this->card_value);
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

    public function newMove()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_move_insert
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_game_id                  => :game_id,
                        in_move                     => :move,
                        in_admin_id 	            => :adminId
                    );
                END;    
            ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':game_id', $this->gameId);
        $st->bindParam(':move', $this->move);
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

//-----------------------------------------MISC--------------------------------------

    public function getAchivement()
    {
        $db = Yii::$app->db;
        $sql = "
                BEGIN
                    sp_hiz_memory_get_achievement
                    (
                        out_code		            => :outCode,
                        out_msg			            => :outMsg,
                        in_title                    => :title,
                        in_user_id                  => :user_id,
                        in_admin_id 	            => :adminId
                    );
                END;    
            ";
        $st = $db->createCommand($sql);
        $st->bindParam(':outCode', $this->errNum, PDO::PARAM_INT, 3);
        $st->bindParam(':outMsg', $this->errStr, PDO::PARAM_STR, 255);
        $st->bindParam(':title', $this->title);
        $st->bindParam(':user_id', $this->user_id);
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
