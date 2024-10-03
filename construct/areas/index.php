<?php
include('libreria/medida.php');
include('libreria/areas.php');

$base = new Medida(10);
$altura = new Medida(5);

$areas = new Areas($base, $altura);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <title>areas</title>
</head>
<body>
    <?php echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Área Cuadrado
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$areas -> areaCuadrado().'</li>
        </ul>
    </div>';
    echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Área Rectángulo
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$areas -> areaRectangulo().'</li>
        </ul>
    </div>';
    echo'
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Área Triángulo
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$areas -> areaTriangulo().'</li>
        </ul>
    </div>';
    ?>
</body>
</html>