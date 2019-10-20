<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
include_once "../public/funcions.php";
use PHPUnit\Framework\TestCase;


class GestisimalTest extends TestCase
{



    function testfindAll(){
        $conn = connexio();
        $result = findAll($conn);
        $first = $result[0];
        $this->assertIsArray($result);
        $this->assertEquals(1,$first->codi);
    }

    function testfindProd(){
        $conn = connexio();
        $result = findProd($conn,2);
        $this->assertEquals(2,$result->codi);
    }



    function testAddDeleteProd(){
        $conn = connexio();
        addProd($conn,['codi'=>100,'descripcio'=>'hola','preuCompra'=>0,'preuVenda'=>5,'stock'=>12]);
        $result = findProd($conn,100);
        $this->assertEquals(100,$result->codi);
        deleteProd($conn,100);
        $this->expectException(\Exception::class);
        deleteProd($conn,100);
    }



    function testModifyProd(){
        $conn = connexio();
        addProd($conn,['codi'=>100,'descripcio'=>'hola','preuCompra'=>0,'preuVenda'=>5,'stock'=>12]);
        modifyProd($conn,['codi'=>100,'descripcio'=>'adeu','preuCompra'=>0,'preuVenda'=>5,'stock'=>12]);
        $result = findProd($conn,100);
        $this->assertEquals('adeu',$result->descripcio);
        deleteProd($conn,100);
    }

    function testPlusProd(){
        $conn = connexio();
        addProd($conn,['codi'=>100,'descripcio'=>'hola','preuCompra'=>0,'preuVenda'=>5,'stock'=>12]);
        plusProd($conn,100);
        $result = findProd($conn,100);
        $this->assertEquals(13,$result->stock);
        deleteProd($conn,100);
    }


    function testMinusProd(){
        $conn = connexio();
        addProd($conn,['codi'=>100,'descripcio'=>'hola','preuCompra'=>0,'preuVenda'=>5,'stock'=>1]);
        minusProd($conn,100);
        $result = findProd($conn,100);
        $this->assertEquals(0,$result->stock);
        $this->expectException(\Exception::class);
        minusProd($conn,100);
        deleteProd($conn,100);
    }

    function testScriptTagsAll(){
        $array = ['codi'=>100,'descripcio'=>'<b>hola</b>','preuCompra'=>0,'preuVenda'=>5,'stock'=>12];
        scriptTagsAll($array);
        $this->assertEquals('hola',$array['descripcio']);
    }
}
