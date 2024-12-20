<?php 
include("../../../config/conex.php"); 
$id = $_POST['id'];
$sql_eliminar = "DELETE FROM category WHERE id = '$id'";
    if ($conex->query($sql_eliminar) === TRUE) {
     
    } 
?>

