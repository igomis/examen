<?php

function score(Array $daus):int
{
    $puntuacio = 0;
    foreach ($daus as $dau){
        $puntuacio += $dau->score();
    }
    return $puntuacio;
}

function connexio(){
    /*Datos de conexion a la base de datos*/
    $db_host = "localhost";
    $db_post = '3306';
    $db_user = "homestead";
    $db_pass = "secret";
    $db_name = "test";

    try {
        $conn = new PDO ("mysql:host=$db_host;port=$db_post;dbname=$db_name", $db_user, $db_pass);
    }catch (PDOException $e) {
        echo 'Error con la base de datos: ' . $e->getMessage();
    }

    return $conn;
}


function findAll($conn){
    $sth = $conn->prepare("SELECT * FROM gestisimal");
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_OBJ);
}

function findProd($conn,$id){
    $sth = $conn->prepare("SELECT * FROM gestisimal WHERE codi = :id");
    $sth->bindParam(':id',$id);
    $sth->execute();
    if (!$sth->rowCount()) throw new Exception('Producte no trobat');
    return $sth->fetch(PDO::FETCH_OBJ);
}

function deleteProd($conn,$id){
    $sth = $conn->prepare("DELETE FROM gestisimal WHERE codi = :id");
    $sth->bindParam(':id',$id);
    $sth->execute();
    if (!$sth->rowCount()) throw new Exception('No he pogut esborrar producte',1);
    return true;
}

function addProd($conn,Array $producte){
    $sth = $conn->prepare("INSERT INTO gestisimal (codi,descripcio,preuCompra,preuVenda,stock) VALUES (:codi,:descripcio,:preuCompra,:preuVenda,:stock)");
    $sth->execute($producte);
    if (!$sth->rowCount()) throw new Exception('No he pogut afegir producte');
    return true;
}

function modifyProd($conn,Array $producte){
    $sth = $conn->prepare("UPDATE gestisimal SET `descripcio` = :descripcio,`preuCompra` = :preuCompra,`preuVenda` = :preuVenda,`stock` = :stock WHERE codi = :codi");
    $sth->execute($producte);
    if (!$sth->rowCount()) throw new Exception('No he pogut modificar producte');
    return true;
}

function plusProd($conn,$nik){
    $producte = findProd($conn,$nik);
    $sth = $conn->prepare("UPDATE gestisimal SET `stock` = :stock WHERE codi = :codi");
    $sth->execute(['stock' => $producte->stock + 1,'codi'=> $nik]);
    if (!$sth->rowCount()) throw new Exception('No he pogut afegir quantitat');
    return true;
}

function minusProd($conn,$nik){
    $producte = findProd($conn,$nik);
    if ($producte->stock == 0) throw new Exception('No hi ha stock');
    $sth = $conn->prepare("UPDATE gestisimal SET `stock` = :stock WHERE codi = :codi");
    $sth->execute(['stock' => $producte->stock - 1,'codi'=> $nik]);
    if (!$sth->rowCount()) throw new Exception('No he pogut llevar quantitat');
    return true;
}

function scriptTagsAll(Array &$array){
    foreach ($array as $index => $elemento){
        $array[$index] = strip_tags($elemento,ENT_QUOTES);
    }
}

function dd($var){
    var_dump($var);
    exit();
}