<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
include("funcions.php");
$conn = connexio();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manteniment de Clients</title>

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
        <h2>Magatzem GESTISIMAL</h2>
        <hr />


        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Codi</th>
                    <th>Descripció</th>
                    <th>PreuCompra</th>
                    <th>PVP</th>
                    <th>Stock</th>
                    <th>Operacions</th>
                </tr>

                    <tr>
                        <td><?= $producto->codi ?></td>
                        <td><?= $producto->descripcio ?></td>
                        <td><?= $producto->preuCompra ?></td>
                        <td><?= $producto->preuVenda ?></td>
                        <td><?= $producto->stock ?></td>
                        <td>
                            <a href="editGestisimal.php?nik=<?= $producto->codi ?>" title="Editar datos" class="btn btn-primary btn-sm">Editar</a>
                            <a href="indexGestisimal.php?aksi=delete&nik=<?= $producto->codi ?>" title="Eliminar"  class="btn btn-danger btn-sm">Esborrar</a>
                            <a href="indexGestisimal.php?aksi=plus&nik=<?= $producto->codi ?>" title="Afegir Unitat" class="btn btn-primary btn-sm">+</a>
                            <a href="indexGestisimal.php?aksi=minus&nik=<?= $producto->codi ?>" title="Restar Unitat" class="btn btn-primary btn-sm">-</a>
                        </td>
                    </tr>

                <tr>
                    <form method="post" >
                        <td><input type="text" name="codi" style="width: 3em"></td>
                        <td><input type="text" name="descripcio" style="width: 10em"></td>
                        <td><input type="text" name="preuCompra" style="width: 3em"></td>
                        <td><input type="text" name="preuVenda" style="width: 3em"></td>
                        <td><input type="text" name="stock" style="width: 3em"></td>
                        <td><input type="submit" name="afegir" value="Afegir"></td>
                    </form>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
