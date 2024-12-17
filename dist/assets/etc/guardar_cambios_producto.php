<?php 
include("../../../config/conex.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $ref = isset($_POST['ref']) ? $_POST['ref'] : '';
    $producto = isset($_POST['producto']) ? $_POST['producto'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $descripcion_completa = isset($_POST['descripcion_completa']) ? $_POST['descripcion_completa'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $valor_producto = isset($_POST['valor_producto']) ? $_POST['valor_producto'] : '';
    $popular = isset($_POST['popular']) ? $_POST['popular'] : '';
    $Oferta = isset($_POST['Oferta']) ? $_POST['Oferta'] : '';
    $valor_producto_oferta = isset($_POST['valor_producto_oferta']) ? $_POST['valor_producto_oferta'] : '';
    $oferta_dia = isset($_POST['oferta_dia']) ? $_POST['oferta_dia'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';

    if ($id != '') {
        $sql = "UPDATE products SET 
                ref = ?, 
                producto = ?, 
                descripcion = ?, 
                descripcion_completa = ?, 
                category = ?, 
                valor_producto = ?, 
                popular = ?, 
                Oferta = ?, 
                valor_producto_oferta = ?, 
                oferta_dia = ?, 
                estado = ? 
                WHERE id = ?";

        if ($stmt = $conex->prepare($sql)) {
            $stmt->bind_param("sssssssssssi", 
                $ref,
                $producto, 
                $descripcion,
                $descripcion_completa,
                $category,
                $valor_producto, 
                $popular, 
                $Oferta, 
                $valor_producto_oferta, 
                $oferta_dia, 
                $estado, 
                $id
            );

            if ($stmt->execute()) {
                echo "success";
            } else {
                echo "Error al actualizar el producto: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conex->error;
        }
    } else {
        echo "El ID del producto no ha sido proporcionado.";
    }
} else {
    echo "No se ha enviado información a través de POST.";
}

?>
