<?php
// App/models/User.php
namespace Examen\Models;

use Examen\Services\Database;
use PDO;

class User {
    private $db;

    public function __construct( ) {
        $this->db = Database::connect();
    }

    public function findUser($username) {
        $query = "SELECT * FROM usuaris WHERE username = :username ";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

