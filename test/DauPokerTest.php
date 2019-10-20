<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
include_once "../public/DauPoker.php";
include_once "../public/funcions.php";
use PHPUnit\Framework\TestCase;


class DauPokerTest extends TestCase
{

    public function test__construct()
    {
    }



    public function testShowFigure()
    {

    }

    public function testScore(){

    }
}
