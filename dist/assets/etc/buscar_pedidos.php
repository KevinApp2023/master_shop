<?php 
include("../../../config/conex.php"); 
date_default_timezone_set('America/Bogota');

$pedido = $_POST['pedido'];

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final = $_POST['fecha_final'];


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$estado = $_POST['estado'];

$where = " WHERE 1=1 ";

if (!empty($pedido)) {
  $where .= " AND n_pedido LIKE '%$pedido%'";
}

if (!empty($fecha_inicio) && !empty($fecha_final)) {
  $fecha_inicio = date('Y-m-d', strtotime($fecha_inicio));
  $fecha_final = date('Y-m-d', strtotime($fecha_final));
  $where .= " AND fecha BETWEEN '$fecha_inicio' AND '$fecha_final'";
}

if (!empty($nombres)) {
  $where .= " AND nombres LIKE '%$nombres%'";
}

if (!empty($apellidos)) {
  $where .= " AND apellidos LIKE '%$apellidos%'";
}

if (!empty($estado)) {
  $where .= " AND estado = '$estado'";
}



$sql = "SELECT f.*, u.nombres, u.apellidos FROM facturas  f JOIN usuarios u  ON f.cliente = u.id   $where ORDER BY f.id DESC";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 
    switch($fila['estado']) {
        case 1: $estado_texto = 'Pendiente'; break;
        case 2: $estado_texto = 'Aprobado'; break;
        case 3: $estado_texto = 'Confirmado'; break;
        case 4: $estado_texto = 'En proceso'; break;
        case 5: $estado_texto = 'Enviado'; break;
        case 6: $estado_texto = 'Entregado'; break;
        case 7: $estado_texto = 'Cancelado'; break;
        case 8: $estado_texto = 'Devuelto'; break;
        case 9: $estado_texto = 'Reembolsado'; break;
        default: $estado_texto = 'Desconocido'; break;
    }
    ?>
    <tr>
    <td class="text-center"><i class="bi bi-circle-fill text-dark"></i></td>
    <td><?php echo $fila['fecha']; ?></td>
    <td><?php echo $fila['hora']; ?></td>
    <td><?php echo $fila['nombres'] . ' ' . $fila['apellidos']; ?></td>
    <td><?php echo $fila['n_pedido']; ?></td>
    <td><?php echo $fila['total']; ?></td>
    <td><?php echo $estado_texto; ?></td>
    <td class="text-center"><a style="margin:0px; padding:1px; font-size: 25px;" onclick="eliminar_producto('<?php echo $fila['id']; ?>')"><i class="bi bi-trash"></i></a></td>
    </tr>
    <?php
  }
}
?>

