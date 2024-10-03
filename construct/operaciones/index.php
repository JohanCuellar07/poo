<?php
include('libreria/numero.php');
include('libreria/operaciones.php');

$num1 = new Numero(10);
$num2 = new Numero(5);

$operaciones = new Operaciones($num1, $num2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <title>operaciones</title>
</head>
<body>
<?php echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Suma
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$operaciones -> sumar().'</li>
        </ul>
    </div>';
    echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Resta
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$operaciones -> restar().'</li>
        </ul>
    </div>';
    echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Mulltiplicación
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$operaciones -> multiplicar().'</li>
        </ul>
    </div>';
    echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            División
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$operaciones -> dividir().'</li>
        </ul>
    </div>';
    ?>
</body>
</html>