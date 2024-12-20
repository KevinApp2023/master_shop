<?php 
include("../../../config/conex.php"); 
date_default_timezone_set('America/Bogota');
$categoria = $_POST['categoria'];
$sql = "INSERT INTO category (name) VALUES ('$categoria')";
if ($conex->query($sql) === TRUE) {
}
?>