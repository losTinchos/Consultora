<?php

namespace App;

use PDO;
use PDOException;

class Database
{

    public $mysql;

    public function __construct()
    {
        try {
            $this->mysql = $this->getConnection();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    private function getConnection()
    {

        $host = "eu-cdbr-west-01.cleardb.com";
        $user = "b255e1a921e094";
        $pass = "ec91def9";
        $database = "heroku_8d63085f3c0c37f";
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo("mysql:host={$host};dbname={$database};charset{$charset}", $user, $pass, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

