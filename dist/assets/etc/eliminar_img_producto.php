<?php 
include("../../../config/conex.php"); 
$id = $_POST['id'];
$foto = '../../..' . $_POST['foto'];

    $sql_eliminar = "DELETE FROM img_productos WHERE id = '$id'";
    if ($conex->query($sql_eliminar) === TRUE) {
        if(file_exists($foto)) {
            unlink($foto);
        } 
    $conex->close();
    } 
?>