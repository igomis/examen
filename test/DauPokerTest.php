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
        $dau = new DauPoker();
        $this->assertIsInt($dau->score());
        $this->assertLessThanOrEqual(6,$dau->score());
        $this->assertGreaterThanOrEqual(1,$dau->score());

    }



    public function testShowFigure()
    {
        $dau = new DauPoker();
        $dau->setValor(5);
        $this->assertStringContainsString("<img src='/img/A.png'",$dau->showFigure());
    }

    public function testScore(){
        $dau[0] = new DauPoker();
        $dau[0]->setValor(5);
        $dau[1] = new DauPoker();
        $dau[1]->setValor(5);
        $dau[2] = new DauPoker();
        $dau[2]->setValor(5);
        $this->assertEquals(18,score($dau));
    }
}
