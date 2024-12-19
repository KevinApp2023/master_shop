<?php 
include("../../../config/conex.php"); 
date_default_timezone_set('America/Bogota');
$producto = $_POST['producto'];
$sql = "INSERT INTO products (producto) VALUES ('$producto')";
if ($conex->query($sql) === TRUE) {
    $ultimo_id = $conex->insert_id;
    echo $ultimo_id;
}
?>