<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="examen.css?v=<?php echo time(); ?>">
    <title>Afegir Producte</title>
</head>
<body>
<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/../views/partials/menu.php') ?>
<div class="container">
<h1>Afegir Producte</h1>


<form action="products.php"  method="post">
    <label for="nom">Nom del producte:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="preu">Preu:</label>
    <input type="number" id="preu" name="preu" step="0.01" required>

    <button type="submit">Afegir Producte</button>
</form>

<a href="products.php">Tornar a la llista de productes</a>
</div>
</body>

</html>
