<?php

session_start();

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $ref => $producto_data) {
        echo "Referencia: $ref<br>";
        echo "Producto: " . $producto_data['producto'] . "<br>";
        echo "Precio unitario: " . $producto_data['valor_unit'] . "<br>";
        echo "Cantidad: " . $producto_data['cant'] . "<br>";
        echo "Total: " . $producto_data['total'] . "<br><br>";
    }
} else {
    echo "El carrito está vacío.";
}






// // Inicializar el carrito si no existe
// if (!isset($_SESSION['cart'])) {
//     $_SESSION['cart'] = [];
// }

// // Agregar producto al carrito
// $ref = '12345';
// $producto = 'Producto A';
// $valor_unit = 100;
// $cant = 2;
// $total = $valor_unit * $cant;

// $_SESSION['cart'][$ref] = [
//     'producto' => $producto,
//     'valor_unit' => $valor_unit,
//     'cant' => $cant,
//     'total' => $total
// ];

// // Modificar cantidad de un producto
// $nueva_cantidad = 3;
// if (isset($_SESSION['cart'][$ref])) {
//     $_SESSION['cart'][$ref]['cant'] = $nueva_cantidad;
//     $_SESSION['cart'][$ref]['total'] = $_SESSION['cart'][$ref]['valor_unit'] * $nueva_cantidad;
// }

// // Eliminar un producto
// if (isset($_SESSION['cart'][$ref])) {
//     unset($_SESSION['cart'][$ref]);
// }

// // Mostrar el carrito
// if (!empty($_SESSION['cart'])) {
//     foreach ($_SESSION['cart'] as $ref => $producto_data) {
//         echo "Referencia: $ref<br>";
//         echo "Producto: " . $producto_data['producto'] . "<br>";
//         echo "Precio unitario: " . $producto_data['valor_unit'] . "<br>";
//         echo "Cantidad: " . $producto_data['cant'] . "<br>";
//         echo "Total: " . $producto_data['total'] . "<br><br>";
//     }
// } else {
//     echo "El carrito está vacío.";
// }

?>