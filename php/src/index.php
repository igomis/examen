<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../Helpers/functions.php';


use Examen\Controllers\UserController;


$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $idioma = $_POST['idioma'];

    if ($userController->login($username, $password)) {
        setcookie('idioma', $idioma, time() + (86400 * 30), "/"); // 30 dies
        header("Location: ../views/welcome.php");
        exit();
    } else {
        echo "Usuari o contrasenya incorrectes.";
    }
}

loadView('login');

