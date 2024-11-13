<?php

namespace Examen\Services;

use PDO;
use PDOException;

class Database {


    public static function  connect():  PDO
    {
        $dbConfig =  require  $_SERVER['DOCUMENT_ROOT'] . '/../config/db.php';

        try {
            $dsn = "mysql:host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['db_name'];
            $db = new  PDO($dsn, $dbConfig['username'], $dbConfig['password']);
            $db->setAttribute( PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch  (PDOException $e) {
            die("Error de connexió: " . $e->getMessage());
        }

        return $db;

    }
}

