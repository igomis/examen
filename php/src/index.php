<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../Helpers/functions.php';
$idiomes = require  $_SERVER['DOCUMENT_ROOT'] . '/../config/languages.php';

use Examen\Controllers\UserController;
use Examen\Exceptions\WrongCredentialsException;

$userController = new UserController();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $idioma = $_POST['idioma'];

    try {
        $userController->login($username, $password);
        setcookie('idioma', $idioma, time() + (86400 * 30), "/");
        header("Location: index.php");
        exit();
    } catch (WrongCredentialsException $e) {
        $error = $e->getMessage();
    }

} else {
    if ($userController->isAuthenticated()) {
        loadView('home');
        exit();
    }
}

loadView('login', compact('idiomes', 'error'));

