<?php 
include("../../../config/conex.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $producto = isset($_POST['producto']) ? $_POST['producto'] : '';
    $ref = isset($_POST['ref']) ? $_POST['ref'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $valor_producto = isset($_POST['valor_producto']) ? $_POST['valor_producto'] : '';
    $popular = isset($_POST['popular']) ? $_POST['popular'] : '';
    $Oferta = isset($_POST['Oferta']) ? $_POST['Oferta'] : '';
    $valor_producto_oferta = isset($_POST['valor_producto_oferta']) ? $_POST['valor_producto_oferta'] : '';
    $oferta_dia = isset($_POST['oferta_dia']) ? $_POST['oferta_dia'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';

    if ($id != '') {
        $sql = "UPDATE products SET 
                producto = ?, 
                ref = ?, 
                category = ?, 
                valor_producto = ?, 
                popular = ?, 
                Oferta = ?, 
                valor_producto_oferta = ?, 
                oferta_dia = ?, 
                estado = ? 
                WHERE id = ?";

        if ($stmt = $conex->prepare($sql)) {
            $stmt->bind_param("sssssssssi", 
                $producto, 
                $ref, 
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
                echo "Producto actualizado correctamente.";
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
