<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
include_once "DauPoker.php";
include_once "funcions.php";
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

                            <div style="width: 80;height: 80;float: left"></div>
                            <p style="clear:both">Has conseguido record . Introduce tu nombre.</p>
                            <form method="post" style="clear: both">
                                <input type="text" name="nom">
                                <input type="submit" name="maximo" value="Envia">
                            </form>
                    <form method="post" style="clear: both">
                        <input type="submit" name="Tira" value="Tira Daus">
                        <input type="submit" name="Reset" value="Resetea Puntuació">
                    </form>

            </div>
        </div>
    </body>
</html>
