<html>
<head>
    <link rel="stylesheet" href="examen.css?v=<?php echo time(); ?>">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
    </style>
    <title>LOGIN</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <div class="error">
        <?=$error;?>
    </div>
<?php endif; ?>
<div class="login">
    <h1>LOGIN</h1>
    <form method="POST" action="index.php">
        <label for="username">Nom d'usuari:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contrasenya:</label>
        <input type="password" id="password" name="password" required>

        <label for="idioma">Selecciona l'idioma:</label>
        <select name="idioma" id="idioma">
            <?php
            // TODO
            ?>
        </select>

        <button type="submit">Iniciar sessió</button>
    </form>
</div>
</body>
</html>

