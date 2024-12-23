<?php
include("../../../config/conex.php");

if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

if (isset($_POST['id'])) {
    $id = $conex->real_escape_string($_POST['id']);
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = $conex->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
            echo json_encode($fila);
       
    }
}

$conex->close();
?>
