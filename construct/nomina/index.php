<?php
include('libreria/empleado.php');
include('libreria/deducciones.php');
include('libreria/nomina.php');

$diasTrabajados = 20;
$valorDia = 50000;

$empleado = new Empleado($diasTrabajados, $valorDia);
$totalSueldo = $empleado->calcularSueldo();

$deducciones = new Deducciones($totalSueldo);
$descuentoTotal = $deducciones->calcularTotalDeducciones();

$sueldoNeto = new Nomina($totalSueldo, $descuentoTotal);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <title>Nómina</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            NÓMINA
        </div>
        <ul class="list-group list-group-flush">
        <?php
        echo '<li class="list-group-item">Días trabajados: ' . $diasTrabajados . '</li>';
        echo '<li class="list-group-item">Valor por día: $' . $valorDia . '</li>';
        echo '<li class="list-group-item">Sueldo Total: $' . $totalSueldo . '</li>';
        echo '<li class="list-group-item">Salud: $' . $deducciones->calcularSalud() . '</li>';
        echo '<li class="list-group-item">Pensión: $' . $deducciones->calcularPension() . '</li>';
        echo '<li class="list-group-item">ARL: $' . $deducciones->calcularArl() . '</li>';
        echo '<li class="list-group-item">Descuento Total: $' . $descuentoTotal . '</li>';
        echo '<li class="list-group-item">Sueldo Neto: $' . $sueldoNeto->calcularSueldoNeto() . '</li>';
        ?>
        </ul>
    </div>
</body>
</html>