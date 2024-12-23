<?php 
include("../../../config/conex.php"); 

$pedido = $_POST['pedido'];
$where = " WHERE 1=1 ";
$total = 0;
$where .= " AND n_pedido LIKE '%$pedido%'";



$sql = "SELECT * FROM pedidos  $where ";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 
    $total += $fila['subtotal'];
    ?>
    <tr>
    <td><p class="m-0"><?php echo $fila['producto']; ?></p></td>
    <td><p class="m-0"><?php echo $fila['unit']; ?></p></td>
    <td><p class="m-0"><?php echo $fila['cant']; ?></p></td>
    <td><p class="m-0"><?php echo $fila['subtotal']; ?></p></td>
    </tr>
    <?php
  }
}
?>
    <tr>
    <td></td>
    <td></td>
    <td><p class="m-0">Total:</p></td>
    <td><p class="m-0"><?php echo $total; ?></p></td>
    </tr>
