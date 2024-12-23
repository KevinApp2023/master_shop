<?php 
include("../../../config/conex.php"); 

$n_pedido = $_POST['n_pedido'];
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$estado = $_POST['estado'];


$sql = "INSERT INTO estados (n_pedido, fecha, hora, estado) VALUES (?, ?, ?, ?)";
if ($stmt = $conex->prepare($sql)) {
    $stmt->bind_param("sssi", $n_pedido, $fecha, $hora, $estado);
    $stmt->execute();
    $stmt->close();
}