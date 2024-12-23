<?php 
include("../../../config/conex.php"); 

$pedido = $_POST['pedido'];
$where = " WHERE 1=1 ";
$total = 0;
$where .= " AND n_pedido LIKE '%$pedido%'";



$sql = "SELECT * FROM estados  $where ";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 

    if ($fila['estado'] == 1){ $fila['estado'] = 'Pendiente'; }
    if ($fila['estado'] == 2){ $fila['estado'] = 'Aprobado'; }
    if ($fila['estado'] == 3){ $fila['estado'] = 'Confirmado'; }
    if ($fila['estado'] == 4){ $fila['estado'] = 'En proceso'; }
    if ($fila['estado'] == 5){ $fila['estado'] = 'Enviado'; }
    if ($fila['estado'] == 6){ $fila['estado'] = 'Entregado'; }
    if ($fila['estado'] == 7){ $fila['estado'] = 'Cancelado'; }
    if ($fila['estado'] == 8){ $fila['estado'] = 'Devuelto'; }
    if ($fila['estado'] == 9){ $fila['estado'] = 'Reembolsado'; }

    ?>
    <tr>
    <td><p class="m-0"><?php echo $fila['fecha']; ?></p></td>
    <td><p class="m-0"><?php echo $fila['hora']; ?></p></td>
    <td><p class="m-0"><?php echo $fila['estado']; ?></p></td>
    </tr>
    <?php
  }
}
?>

