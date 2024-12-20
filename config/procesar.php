<?php   
include("../config/conex.php");
include("../config/config.php"); 


$n_pedido = $_GET['n_pedido'];
$total = $_GET['total'];
$ref = $_GET['ref_payco'];
$estado = '1';



$sql =  "INSERT INTO facturas (n_pedido, total, ref, estado) VALUES ($n_pedido, $total, $ref, $estado)";
if ($conex->query($sql) === TRUE) {


if (!empty($_SESSION['cart'])) {
    $sql = "INSERT INTO pedidos (n_pedido, producto, unit, cant, subtotal) VALUES (?, ?, ?, ?, ?)";
    
    if ($stmt = $conex->prepare($sql)) {
        
        foreach ($_SESSION['cart'] as $ref_p => $producto_data) {
            $producto_p = $producto_data['producto_p'];
            $valor_unit_p = $producto_data['valor_unit_p'];
            $cant_p = $producto_data['cant_p'];
            $total_p = $producto_data['total_p'];

            $stmt->bind_param("ssdid", $n_pedido, $producto_p, $valor_unit_p, $cant_p, $total_p);

            if ($stmt->execute()) {
                echo "Producto insertado con éxito: $n_pedido - $producto_p<br>";
            } else {
                echo "Error al insertar el producto: $n_pedido - $producto_p<br>";
            }
        }
        
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conex->error . "<br>";
    }
} else {
    echo "El carrito está vacío.<br>";
}


header("Location: /mi/facturas");
}
?>







