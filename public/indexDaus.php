<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
include_once "DauPoker.php";
include_once "funcions.php";
session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exercisi de daus</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .content {
                margin-top: 80px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>Partida Daus</h2>
                <hr />
                    <?php
                        if (isset($_POST['maximo'])){
                            $_SESSION['nombre'] = $_POST['nom'];
                        }
                        if (isset($_POST['Reset'])){
                            unset($_SESSION['score']);
                            unset($_SESSION['nombre']);
                        }
                        if (isset($_POST['Tira'])){
                            for($i=0;$i<5;$i++){
                                $tirada[$i] = new DauPoker();

                    ?>
                            <div style="width: 80;height: 80;float: left"><?= $tirada[$i]->showFigure() ?></div>
                    <?php }
                        $score = score($tirada);
                        if (!isset($_SESSION['score']) || $score > $_SESSION['score']) {
                            $_SESSION['score'] = $score; ?>

                            <p style="clear:both">Has conseguido record <?= $score ?>. Introduce tu nombre.</p>
                            <form method="post" style="clear: both">
                                <input type="text" name="nom">
                                <input type="submit" name="maximo" value="Envia">
                            </form>
                    <?php
                        exit();}}
                    ?>
                    <form method="post" style="clear: both">
                        <input type="submit" name="Tira" value="Tira Daus">
                        <input type="submit" name="Reset" value="Resetea Puntuació">
                    </form>
                    <?php if (isset($_SESSION['score'])) { ?>
                        <p>Puntuacio màxima : <?= $_SESSION['score'] ?> fet per <?= $_SESSION['nombre'] ?></p>
                    <?php } ?>
            </div>
        </div>
    </body>
</html>
