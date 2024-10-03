<?php
include('libreria/operaciones.php');
$suma = new Operaciones();
$resta = new Operaciones();
$multiplicacion = new Operaciones();
$division = new Operaciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
    echo $suma -> sumar(4, 2);
    echo '<br>';
    echo $resta -> restar(4, 2);
    echo '<br>';
    echo $multiplicacion -> multiplicar(4, 2);
    echo '<br>';
    echo $division -> dividir(4, 2);
    ?>
</body>
</html>