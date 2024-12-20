<?php 
include("../../../config/conex.php"); 
$buscar_categoria = $_POST['buscar_categoria'];

$where = "WHERE 1=1";

if (!empty($buscar_categoria)) {
    $buscar_categoria = $conex->real_escape_string($buscar_categoria);
    $where .= " AND (name LIKE '%$buscar_categoria%')";
}

$sql = "SELECT * FROM category $where ORDER BY id DESC";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 
    
    ?>
    <tr>
    <td ><i class="bi bi-circle-fill text-dark  "></i></td>
    <td ><?php echo $fila['name']; ?></td>
<th class="text-center">
      <a  style="margin:0px; padding:1px; font-size: 25px;" onclick="eliminar_producto('<?php echo $fila['id']; ?>')"><i class="bi bi-trash"></i></a></th>
    </tr>
    <?php
  }
}

?>

