<?php
include("../config/conex.php");
include("../config/config.php");


if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $ref_p => $producto_data) { ?>
      
      <div class="cart_p p-3 <?php echo $ref_p; ?>">
<div class="row mb-0">
    <div class="col-2"><img src="<?php echo $producto_data['img_p']; ?>" class="w-100"></div>
    <div class="col p-0 m-0">
        <div class="row">
        <div class="col"><p class="p-0 m-0"><?php echo $producto_data['producto_p']; ?></p></div>
    <div class="col-auto   "><a id="eliminar_data_cart" href="/product/<?php echo $producto_data['url_p']; ?>" class=" btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?>"><i class="bi bi-trash"></i></a></div>
    <div class="col-auto   "><a id="eliminar_data_cart" class=" btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?>"><i class="bi bi-pencil-square"></i></a></div>
    <p class="fst-italic text-danger mt-0 pt-0">Unit $ <?php echo $producto_data['valor_unit_p']; ?>. X<?php echo $producto_data['cant_p']; ?>. Subtotal $ <?php echo $producto_data['total_p']; ?>. </p>
        </div>
    </div>
</div>
</div>



  <?php  }
} else {
    ?>
  <div class="alert alert-<?php echo $color_top; ?>" role="alert">
  El carrito se encuentra vacio!
</div>
    <?php
}

?>







<?php




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




