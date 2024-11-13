<?php

namespace Examen\Models;

use Examen\Services\Database;
use PDO;

class Product {
    private $db;

    public function __construct()   {
        $this->db = Database::connect();
    }

    public function getAllProducts() {
        $query = "SELECT * FROM productes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct($nom, $preu) {
        $query = "INSERT INTO productes (nom, preu) VALUES (:nom, :preu)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":preu", $preu);
        $stmt->execute();
    }

    // TODO : Mètodes updateProduct i deleteProduct s'inclourien de la mateixa manera
}
