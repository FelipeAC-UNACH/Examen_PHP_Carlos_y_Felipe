<?php
    $nombre=isset($_POST['base'])? $_POST['base']:null;
    $edad=isset($_POST['altura'])? $_POST['altura']:null;
    $resultado=$nombre*$edad;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área del rectángulo</title>
</head>
<body>
<center><h1>Calcular el área del rectángulo</h1></center>

    <form action="rectangulo.php" method="post">
        <input type="text" name="base" id="">
        <input type="text" name="altura" id="">
        <input type="submit" value="Resultado">
    </form>
    <?php

        echo 'El área del rectángulo es: '.$resultado.'<br>';
    ?>
</body>
</html>