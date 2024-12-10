<?php
session_start();
$ref = $_POST['ref'];
$producto = $_POST['producto'];
$valor_unit = $_POST['valor_unit'];
$cant = $_POST['cant'];
$total = $valor_unit * $cant;

$_SESSION['cart'][$ref] = [
    'producto' => $producto,
    'valor_unit' => $valor_unit,
    'cant' => $cant,
    'total' => $total
];
?>