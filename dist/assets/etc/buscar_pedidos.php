<?php 
include("../../../config/conex.php"); 

$sql = "SELECT f.*, u.nombres, u.apellidos 
        FROM facturas f 
        JOIN usuarios u ON f.cliente = u.id
        ORDER BY f.id DESC";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 
    switch($fila['estado']) {
        case 1: $estado = 'Pendiente'; break;
        case 2: $estado = 'Aprobado'; break;
        case 3: $estado = 'Confirmado'; break;
        case 4: $estado = 'En proceso'; break;
        case 5: $estado = 'Enviado'; break;
        case 6: $estado = 'Entregado'; break;
        case 7: $estado = 'Cancelado'; break;
        case 8: $estado = 'Devuelto'; break;
        case 9: $estado = 'Reembolsado'; break;
        default: $estado = 'Desconocido'; break;
    }
    ?>
    <tr>
    <td class="text-center"><i class="bi bi-circle-fill text-dark"></i></td>
    <td><?php echo $fila['fecha']; ?></td>
    <td><?php echo $fila['hora']; ?></td>
    <td><?php echo $fila['nombres'] . ' ' . $fila['apellidos']; ?></td>
    <td><?php echo $fila['n_pedido']; ?></td>
    <td><?php echo $fila['total']; ?></td>
    <td><?php echo $estado; ?></td>
    <td class="text-center"><a style="margin:0px; padding:1px; font-size: 25px;" onclick="eliminar_producto('<?php echo $fila['id']; ?>')"><i class="bi bi-trash"></i></a></td>
    </tr>
    <?php
  }
}
?>
