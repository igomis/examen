<?php

namespace Examen\Controllers;

use Examen\Models\User;


class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login($username, $password) {
        $user = $this->userModel->findUser($username, $password);
        if ($user) {
            //TODO
            return true;
        }
        return false;
    }



    public function isAuthenticated() {
        return isset($_SESSION['user']);
    }
}

