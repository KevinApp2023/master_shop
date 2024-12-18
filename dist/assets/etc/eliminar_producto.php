<?php 
include("../../../config/conex.php"); 
$id = $_POST['id'];
$sql_eliminar = "DELETE FROM products WHERE id = '$id'";
    if ($conex->query($sql_eliminar) === TRUE) {
        $consult_productos = "SELECT * FROM img_productos WHERE productos = '$id'";
        $resultado_productos = $conex->query($consult_productos);
        $first = true; 
        if ($resultado_productos->num_rows > 0) {
            while ($data_productos = $resultado_productos->fetch_assoc()) { 
                
                $sql_eliminar_c = "DELETE FROM img_productos WHERE productos = '$id'";
    if ($conex->query($sql_eliminar_c) === TRUE) {

                if(file_exists('../../..' . $data_productos['img'])) {
                    unlink('../../..' . $data_productos['img']);

                } 
            }
        
            }
        }
       

    } 
?>

