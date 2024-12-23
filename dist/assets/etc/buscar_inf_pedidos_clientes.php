<?php 
include("../../../config/conex.php"); 

$cliente = $_POST['cliente'];

$where = " WHERE 1=1 ";

if (!empty($cliente)) {
  $where .= " AND cliente = '$cliente'";
}



$sql = "SELECT * FROM facturas  $where";
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
    <td><?php echo $fila['n_pedido']; ?></td>
    <td><?php echo $fila['total']; ?></td>
    <td><?php echo $estado_texto; ?></td>
    <td class="text-center"><a style="margin:0px; padding:1px; font-size: 25px;" onclick="ver_pedido('<?php echo $fila['id']; ?>')"><i class="bi bi-layout-text-sidebar-reverse"></i></a></td>
    </tr>
    <?php
  }
}
?>

