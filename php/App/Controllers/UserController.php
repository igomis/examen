<?php

namespace Examen\Controllers;

use Examen\Models\User;


class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login($username, $password) {
        $user = $this->userModel->findUser($username);
        // TODO implementar la comprobación de la contraseña i la creación de la sessió

    }



    public function isAuthenticated() {
        return isset($_SESSION['user']);
    }
}

