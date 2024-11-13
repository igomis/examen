<?php
// App/controllers/UserController.php
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
            $_SESSION['user'] = $username;
            return true;
        }
        return false;
    }

    public function logout() {
        session_unset();
        session_destroy();
    }

    public function isAuthenticated() {
        return isset($_SESSION['user']);
    }
}

