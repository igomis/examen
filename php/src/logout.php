<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
use Examen\Controllers\UserController;

UserController::logout();
header("Location: index.php");
exit();
