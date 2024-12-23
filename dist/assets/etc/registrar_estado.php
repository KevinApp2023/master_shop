<?php 
include("../../../config/conex.php"); 

$n_pedido = $_POST['n_pedido'];
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$estado = $_POST['estado'];

$sql_facturas = "UPDATE facturas SET estado = ? WHERE n_pedido = ?";
if ($stmt_facturas = $conex->prepare($sql_facturas)) {
    $stmt_facturas->bind_param("si", $estado, $n_pedido);
    $stmt_facturas->execute();
    $stmt_facturas->close();
    
}
  


$sql_estados = "INSERT INTO estados (n_pedido, fecha, hora, estado) VALUES (?, ?, ?, ?)";
if ($stmt_estados = $conex->prepare($sql_estados)) {
    $stmt_estados->bind_param("sssi", $n_pedido, $fecha, $hora, $estado);
    $stmt_estados->execute();
    $stmt_estados->close();
} 


