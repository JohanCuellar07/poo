<?php
include('libreria/empleado.php');
include('libreria/nomina.php');

// Empleados
$empleado1 = new Empleado(8572036198, 'Sofia', 'Johnson Martinez', 'Gerente', 120000, 12);
$empleado2 = new Empleado(4321657890, 'Liam', 'Rodriguez Wilson', 'Analista', 100000, 28);
$empleado3 = new Empleado(9078563210, 'Mia', 'Anderson Perez', 'Director', 150000, 5);

// Crear la nómina
$nomina = new Nomina();
$nomina->agregarEmpleado($empleado1);
$nomina->agregarEmpleado($empleado2);
$nomina->agregarEmpleado($empleado3);

// Calcular totales
$nomina->calcularTotales();

// Generar la tabla
$tabla = $nomina->generarTabla();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <title>Nómina de Empleados</title>
</head>
<body>
    <h1>Nómina de Empleados</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Subsidio Transporte</th>
                <th>Salud</th>
                <th>Pensión</th>
                <th>ARL</th>
                <th>Retención</th>
                <th>Pago Total</th>
            <tr>
        </thead>
        <tbody>
            <?php foreach ($tabla as $fila): ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['cargo']; ?></td>
                <td><?php echo number_format($fila['salario']); ?></td>
                <td><?php echo number_format($fila['subsidioTransporte']); ?></td>
                <td><?php echo number_format($fila['salud']); ?></td>
                <td><?php echo number_format($fila['pension']); ?></td>
                <td><?php echo number_format($fila['arl']); ?></td>
                <td><?php echo number_format($fila['retencion']); ?></td>
                <td><?php echo number_format($fila['pagoTotal']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr class="totals">
                <td colspan="5">Totales</td>
                <td><?php echo number_format($nomina->getSaludTotal()); ?></td>
                <td><?php echo number_format($nomina->getPensionTotal()); ?></td>
                <td><?php echo number_format($nomina->getArlTotal()); ?></td>
                <td><?php echo number_format($nomina->getRetencionTotal()); ?></td>
                <td><?php echo number_format($nomina->getTotalPagos()); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>