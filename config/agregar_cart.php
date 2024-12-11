<?php
session_start();
$d_p = $_POST['d_producto'];
$ref_p = $_POST['ref_producto'];
$img_p = $_POST['img_producto'];
$url_p = $_POST['url_producto'];
$producto_p = $_POST['producto'];
$valor_unit_p = $_POST['valor_unit'];
$cant_p = $_POST['cant'];
$total_p = $valor_unit_p * $cant_p;

$_SESSION['cart'][$ref_p] = [
    'd_p' => $d_p,
    'img_p' => $img_p,
    'url_p' => $url_p,
    'producto_p' => $producto_p,
    'valor_unit_p' => $valor_unit_p,
    'cant_p' => $cant_p,
    'total_p' => $total_p
];
?>