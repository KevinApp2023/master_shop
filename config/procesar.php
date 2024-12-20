<?php
include("../config/conex.php");
include("../config/config.php");

$n_pedido = $_GET['n_pedido'];
$total = $_GET['total'];
$ref = $_GET['ref_payco'];
$estado = '1';

// Estado 1 = pendiente
// Estado 2 = Aprobado
// Estado 3 = Confirmado
// Estado 4 = En proceso
// Estado 5 = Enviado
// Estado 6 = Entregado
// Estado 7 = Cancelado
// Estado 8 = Devuelto
// Estado 9 = Reembolsado

$conex->begin_transaction();

try {
    $sql_factura = "INSERT INTO facturas (n_pedido, total, ref, estado) VALUES (?, ?, ?, ?)";
    $stmt_factura = $conex->prepare($sql_factura);
    $stmt_factura->bind_param("sdsi", $n_pedido, $total, $ref, $estado);

    if (!$stmt_factura->execute()) {
        throw new Exception("Error al insertar factura: " . $stmt_factura->error);
    }
    
    if (!empty($_SESSION['cart'])) {
        $sql_pedido = "INSERT INTO pedidos (n_pedido, producto, unit, cant, subtotal) VALUES (?, ?, ?, ?, ?)";
        $stmt_pedido = $conex->prepare($sql_pedido);
        $stmt_pedido->bind_param("ssdid", $n_pedido, $producto_p, $valor_unit_p, $cant_p, $total_p);

        foreach ($_SESSION['cart'] as $ref_p => $producto_data) {
            $producto_p = $producto_data['producto_p'];
            $valor_unit_p = $producto_data['valor_unit_p'];
            $cant_p = $producto_data['cant_p'];
            $total_p = $producto_data['total_p'];

            if (!$stmt_pedido->execute()) {
                throw new Exception("Error al insertar producto: $producto_p - " . $stmt_pedido->error);
            }
        }

        $stmt_pedido->close();
    } 

    $conex->commit();
    unset($_SESSION['cart']);
    unset($_SESSION['pedido']);
    header("Location: /");

} catch (Exception $e) {
    $conex->rollback();
    echo "Error al insertar los datos: " . $e->getMessage() . "<br>";
}

$stmt_factura->close();
?>
