<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/../Helpers/functions.php';
$idiomes = require  $_SERVER['DOCUMENT_ROOT'] . '/../config/languages.php';