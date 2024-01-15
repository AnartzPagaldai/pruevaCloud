<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hola could</h1>
    <form method="post">
        <p>nombre</p>
        <input type="text" name="nombre">
        <p>Contraseña</p> 
        <input type="text" name="pass">
    </form>
    <p><?= $error ?></p>
    <a href="/adios.php">adios</a>
</body>

</html>