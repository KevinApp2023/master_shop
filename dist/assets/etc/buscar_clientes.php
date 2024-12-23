<?php 
include("../../../config/conex.php"); 

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];


$where = " WHERE 1=1 ";

$where .= " AND priv = '2'";

if (!empty($nombres)) {
  $where .= " AND nombres LIKE '%$nombres%'";
}


if (!empty($apellidos)) {
  $where .= " AND apellidos LIKE '%$apellidos%'";
}

if (!empty($correo)) {
  $where .= " AND correo LIKE '%$correo%'";
}

if (!empty($telefono)) {
    $where .= " AND telefono LIKE '%$telefono%'";
}


if (!empty($direccion)) {
  $where .= " AND correo LIKE '%$direccion%'";
}

if (!empty($ciudad)) {
    $where .= " AND ciudad LIKE '%$ciudad%'";
}


if (!empty($pais)) {
    $where .= " AND pais LIKE '%$pais%'";
}



$sql = "SELECT * FROM usuarios $where ";
$resultado = $conex->query($sql);
if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) { 
    ?>
    <tr>
    <td class="text-center"><i class="bi bi-circle-fill text-dark"></i></td>
    <td><?php echo $fila['nombres']; ?></td>
    <td><?php echo $fila['apellidos']; ?></td>
    <td><?php echo $fila['correo']; ?></td>
    <td><?php echo $fila['telefono']; ?></td>
    <td><?php echo $fila['direccion']; ?></td>
    <td><?php echo $fila['ciudad']; ?></td>
    <td><?php echo $fila['pais']; ?></td>
    <td class="text-center"><a style="margin:0px; padding:1px; font-size: 25px;" onclick="ver_cliente('<?php echo $fila['id']; ?>')"><i class="bi bi-layout-text-sidebar-reverse"></i></a></td>
    </tr>
    <?php
  }
}
?>

