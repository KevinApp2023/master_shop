<?php
include("../../../config/conex.php");

if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

if (isset($_POST['id'])) {
    $id = $conex->real_escape_string($_POST['id']);
    $sql = "SELECT f.*, u.nombres, u.apellidos 
    FROM facturas f 
    JOIN usuarios u ON f.cliente = u.id 
    WHERE f.id = '$id'";
    $resultado = $conex->query($sql);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();

       if ($fila['estado'] == 1){ $fila['estado'] = 'Pendiente'; }
       if ($fila['estado'] == 2){ $fila['estado'] = 'Aprobado'; }
       if ($fila['estado'] == 3){ $fila['estado'] = 'Confirmado'; }
       if ($fila['estado'] == 4){ $fila['estado'] = 'En proceso'; }
       if ($fila['estado'] == 5){ $fila['estado'] = 'Enviado'; }
       if ($fila['estado'] == 6){ $fila['estado'] = 'Entregado'; }
       if ($fila['estado'] == 7){ $fila['estado'] = 'Cancelado'; }
       if ($fila['estado'] == 8){ $fila['estado'] = 'Devuelto'; }
       if ($fila['estado'] == 9){ $fila['estado'] = 'Reembolsado'; }
       
       $fila['cliente'] = $fila['nombres'] . ' ' . $fila['apellidos'];
      
            echo json_encode($fila);
       
    }
}

$conex->close();
?>
