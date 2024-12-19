<?php 
include("../../../config/conex.php"); 
date_default_timezone_set('America/Bogota');
$id = $_POST['id'];

$consult_img_productos = "SELECT * FROM img_productos WHERE productos = ?";
if ($stmt = $conex->prepare($consult_img_productos)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado_img_productos = $stmt->get_result();

    if ($resultado_img_productos->num_rows >= 1) {
        
        if (isset($_FILES['agregar_nueva_galeria_data']) && $_FILES['agregar_nueva_galeria_data']['error'] === 0) {
            $agregar_nueva_galeria_data = $_FILES['agregar_nueva_galeria_data'];
            $agregar_nueva_galeria_data_path = '/img/products/' . date('Y_m_d_H_i_s_') . basename($agregar_nueva_galeria_data['name']);
            $agregar_nueva_galeria_data_path_s = '../../../img/products/' . date('Y_m_d_H_i_s_')  . basename($agregar_nueva_galeria_data['name']);

            if (move_uploaded_file($agregar_nueva_galeria_data['tmp_name'], $agregar_nueva_galeria_data_path_s)) {
                $sql = "INSERT INTO img_productos (img, productos) VALUES (?, ?)";
                if ($stmt = $conex->prepare($sql)) {
                    $stmt->bind_param("si", $agregar_nueva_galeria_data_path, $id);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }
    } else {


        if (isset($_FILES['agregar_nueva_galeria_data']) && $_FILES['agregar_nueva_galeria_data']['error'] === 0) {
            $agregar_nueva_galeria_data = $_FILES['agregar_nueva_galeria_data'];
            $agregar_nueva_galeria_data_path = '/img/products/' . date('Y_m_d_H_i_s_') . basename($agregar_nueva_galeria_data['name']);
            $agregar_nueva_galeria_data_path_s = '../../../img/products/' . date('Y_m_d_H_i_s_')  . basename($agregar_nueva_galeria_data['name']);

            if (move_uploaded_file($agregar_nueva_galeria_data['tmp_name'], $agregar_nueva_galeria_data_path_s)) {
                $sql = "UPDATE products SET img_producto = ? WHERE id = ?";
                if ($stmt = $conex->prepare($sql)) {
                    $stmt->bind_param("si", $agregar_nueva_galeria_data_path, $id);
                    $stmt->execute();
                    $stmt->close();
                }
                $sql_g = "INSERT INTO img_productos (img, productos) VALUES ('$agregar_nueva_galeria_data_path', '$id')";
                if ($conex->query($sql_g) === TRUE) {
                }
            }
        }



        
    }
}
?>
