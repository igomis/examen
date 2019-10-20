<?php

/**
 * @param array $daus
 * @return int
 * Torna puntuació d'un array de daus
 */
function score(Array $daus):int
{

}

/**
 * @return PDO
 */
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


/**
 * @param $conn
 * @return mixed
 * torna tots el productes
 */
function findAll($conn){

}

/**
 * @param $conn
 * @param $id
 * @return mixed
 * @throws Exception
 * torna un producte i si no exempcio
 */
function findProd($conn, $id){

}

/**
 * @param $conn
 * @param $id
 * @return bool
 * @throws Exception
 * esborra producte i si no exempcio
 */
function deleteProd($conn, $id){

}

/**
 * @param $conn
 * @param array $producte
 * @return bool
 * @throws Exception
 * Agefix un producte amb les dades dins d'un array
 */
function addProd($conn, Array $producte){

}

/**
 * @param $conn
 * @param array $producte
 * @return bool
 * @throws Exception
 * modifica un producte ab les dades en un array
 */
function modifyProd($conn, Array $producte){

}

/**
 * @param $conn
 * @param $nik
 * @return bool
 * @throws Exception
 * afegix una quantitat a l'stock
 */
function plusProd($conn, $nik){

}

/**
 * @param $conn
 * @param $nik
 * @return bool
 * @throws Exception
 * esborra quantitat a l'stock
 */
function minusProd($conn, $nik){

}

/**
 * @param array $array
 * lleva els tags d'un array
 */
function scriptTagsAll(Array &$array){
    foreach ($array as $index => $elemento){
        $array[$index] = strip_tags($elemento,ENT_QUOTES);
    }
}

function dd($var){
    var_dump($var);
    exit();
}