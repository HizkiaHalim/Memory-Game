<?php

namespace app\models;

use Yii;
use yii\base\Model;
use PDO;

class MemoryLeaderboard extends Model
{
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
                ORDER BY
                    CARDQTY,MINUTE,SECOND";
        $st = $db->createCommand($sql);
        $game = $st->queryAll();

        return $game;
    }

    public function getUser()
    {
        $db = Yii::$app->db;
        $sql = "
                SELECT
                    ID,
                    USERNAME
                FROM 
                    HIZ_MEMORY_USER
                WHERE 
                    status = 1
                ORDER BY
                    ID";
        $st = $db->createCommand($sql);
        $game = $st->queryAll();

        return $game;
    } 
    
}