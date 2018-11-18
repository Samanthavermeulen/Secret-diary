<?php
/**
 * Created by PhpStorm.
 * User: Maarten Ende
 * Date: 31-10-2018
 * Time: 00:24
 */

class QueryBuilder
{
    //Properties and Methods goes here
    public $db = 'mysql:dbname=secret_diary;host=127.0.0.1';
    public $user = 'root';
    public $password = '';
    public $pdo;

    public function connection(){
        try{
            $this->pdo = new PDO($this->db, $this->user, $this->password);
        } catch (PDOException $e){
            echo 'connection failed: ' . $e->getMessage();
        }
    }

}

