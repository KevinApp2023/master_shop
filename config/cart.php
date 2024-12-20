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
    <div class="col-auto   "><a id="eliminar_data_cart" href="/product/<?php echo $producto_data['d_p']; ?>/<?php echo $producto_data['url_p']; ?>" class=" btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?>"><i class="bi bi-pencil-square"></i></a></div>
    <div class="col-auto   "><a id="eliminar_data_cart" onclick="eliminar_data_cart('<?php echo $ref_p; ?>')"class=" btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?>"><i class="bi bi-trash"></i></a></div>
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




<script>
    function eliminar_data_cart(ref_p) {
            $.ajax({
                url: '/c/cart/eliminar_data_cart?ref_p=' + ref_p, 
                method: 'GET',
                success: function(response) {
                    actualizarCarrito();
                },
                error: function() {
                    alert('Hubo un error al actualizar el carrito.');
                }
            });
        }
</script>


