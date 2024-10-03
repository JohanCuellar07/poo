<?php
include('libreria/empleado.php');
include('libreria/salud.php');
include('libreria/pension.php');
include('libreria/arl.php');
include('libreria/descuento.php');
include('libreria/nomina.php');

$diasTrabajados = 20;
$valorDia = 50000;

$empleado = new Empleado($diasTrabajados, $valorDia);
$totalSueldo = $empleado->calcularSueldo();

$salud = new Salud($totalSueldo);
$pension = new Pension($totalSueldo);
$arl = new Arl($totalSueldo);

$descuento = new Descuento($salud->calcularSalud(), $pension->calcularPension(), $arl->calcularArl());
$sueldoNeto = new Nomina($totalSueldo, $descuento->calcularDescuento());
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
        echo '<li class="list-group-item">Salud: $' . $salud->calcularSalud() . '</li>';
        echo '<li class="list-group-item">Pensión: $' . $pension->calcularPension() . '</li>';
        echo '<li class="list-group-item">ARL: $' . $arl->calcularArl() . '</li>';
        echo '<li class="list-group-item">Descuento Total: $' . $descuento->calcularDescuento() . '</li>';
        echo '<li class="list-group-item">Sueldo Neto: $' . $sueldoNeto->calcularSueldoNeto() . '</li>';
        ?>
        </ul>
    </div>
</body>
</html>