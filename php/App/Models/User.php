<?php

namespace Examen\Models;

use Examen\Services\Database;
use PDO;

class User {
    private $db;

    public function __construct()   {
        $this->db = Database::connect();
    }

    public function findUser($username, $password) {
        $query = "SELECT * FROM usuaris WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

