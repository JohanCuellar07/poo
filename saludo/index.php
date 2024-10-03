<?php
include('libreria/saludo.php');
$saludo = new Saludo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <?php
    echo $saludo -> saluda('HOLA MUNDO');
    ?>
</body>
</html>