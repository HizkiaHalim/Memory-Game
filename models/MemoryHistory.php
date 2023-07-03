<?php

namespace app\models;

use Yii;
use yii\base\Model;
use PDO;

class MemoryHistory extends Model
{
    public $errNum = 0;
    public $errStr = '';
    public $user_id, $gameId;

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
                    AND game_status = 'complete'
                    AND user_id = :user_id
                ORDER BY
                    ID DESC";
        $st = $db->createCommand($sql);
        $st->bindParam(':user_id', $this->user_id);
        $game = $st->queryAll();

        return $game;
    } 
    
    public function getMove()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT
                    ID,
                    GAME_ID,
                    MOVE
                FROM 
                    HIZ_MEMORY_MOVE_DICT 
                WHERE 
                    status = 1
                ORDER BY
                    ID";
        $st = $db->createCommand($sql);
        $moveset = $st->queryAll();

        return $moveset;
    } 
}