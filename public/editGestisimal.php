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
        <h2>Dades del producte &raquo; Modificar dades</h2>
        <hr />

        <?php
        try {
            $nik = strip_tags($_GET["nik"],ENT_QUOTES);
            $producte = findProd($conn,$nik);
        }catch (Exception $e){
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$e->getMessage().' !</div>';
            exit();
        }

        if(isset($_POST['update'])){
            $producto = $_POST;
            unset($producto['update']);
            scriptTagsAll($producto);
            try{
                modifyProd($conn,$producto);
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
            }catch (Exception $e){
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$e->getMessage().' !</div>';

            }
        }
        ?>

        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label">Codi</label>
                <div class="col-sm-2">
                    <input type="hidden" name="codi" class="form-control" placeholder="codi" value="<?=$producte->codi?>" required>
                    <?=$producte->codi?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Descripcio</label>
                <div class="col-sm-4">
                    <input type="text" name="descripcio" class="form-control" placeholder="Descripcio"  value="<?=$producte->descripcio?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Preu Compra</label>
                <div class="col-sm-4">
                    <input type="text" name="preuCompra" class="form-control" placeholder="PreuCompra"  value="<?=$producte->preuCompra?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">PVP</label>
                <div class="col-sm-3">
                    <input type="text" name="preuVenda" class="form-control" placeholder="PreuVenda"  value="<?=$producte->preuVenda?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Stock</label>
                <div class="col-sm-3">
                    <input type="text" name="stock" class="form-control" placeholder="Stock"  value="<?=$producte->stock?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">&nbsp;</label>
                <div class="col-sm-6">
                    <input type="submit" name="update" class="btn btn-sm btn-primary" value="Guardar dades">
                    <a href="indexGestisimal.php" class="btn btn-sm btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>