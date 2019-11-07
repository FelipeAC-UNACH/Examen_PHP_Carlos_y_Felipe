<?php
    $radio=isset($_POST['radio'])? $_POST['radio']:null;
    $pi=3.1416;
    $resultado=$radio*$radio*$pi;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área del círculo</title>
</head>
<body>
<center><h1>Calcular el área del círculo</h1></center>
    <form action="circulo.php" method="post">
        <input type="text" name="radio" id="">
        <input type="submit" value="Resultado">
    </form>
    <?php
        echo 'El área del círculo es: '.$resultado.'<br>';
    ?>
</body>
</html>