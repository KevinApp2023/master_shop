<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<?php include("../mod/head.php"); ?>
<body>
<?php include("../mod/top.php"); ?>
<?php include("../mod/header.php"); ?>


<div class="container mt-5">
    <div class="row">
       

        <div class="col-md-5 col-lg-4 order-md-last">
        <ul class="list-group mb-3">
          
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                 <h6 class="my-0">Comercio</h6>
                </div>
                 <small class="text-body-secondary"><?= $title ?></small>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">NIT</h6>
                </div>
                <small class="text-body-secondary"><?= $NIT ?></small>
           </li>
         
             <li class="list-group-item d-flex justify-content-between lh-sm">
                 <div>
                   <h6 class="my-0">Fecha</h6>
                 </div>
                 <small class="text-body-secondary"><?= date('Y-m-d') ?></small>
            </li>  
          
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                 <h6 class="my-0">Hora</h6>
                </div>
              <small class="text-body-secondary"><?= date('H-i-s') ?></small>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                <div class="text-success">
                    <h6 class="my-0">Total</h6>
                </div>
                <span class="text-success">$<?php echo  number_format($_SESSION['total'], 2); ?></span>
            </li>
        </ul>
      </div>

   
   
      <div class="col-md-7 col-lg-8">
<div class="table-responsive">
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Ref</th>
                <th scope="col">Producto</th>
                <th scope="col">Unit</th>
                <th scope="col">Cant</th>
                <th scope="col">Subtotal</th>
                <th scope="col-auto"></th>
            </tr>
        </thead>
        <tbody>
<?php
    if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $ref_p => $producto_data) {
        
         ?>
      
            <tr class="">
                <td scope="row"><?php echo $ref_p; ?></td>
                <td><?php echo $producto_data['producto_p']; ?></td>
                <td><?php echo $producto_data['valor_unit_p']; ?></td>
                <td><?php echo $producto_data['cant_p']; ?></td>
                <td><?php echo $producto_data['total_p']; ?></td>
                <td>
                <a id="eliminar_data_cart" href="/product/<?php echo $producto_data['d_p']; ?>/<?php echo $producto_data['url_p']; ?>" class=" btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?>"><i class="bi bi-pencil-square"></i></a>
                <a id="eliminar_data_cart" onclick="eliminar_data_cart('<?php echo $ref_p; ?>')"class=" btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
  <?php  }
}
?>
        </tbody>
    </table>
</div>















<?php
    if (empty($_SESSION['cart'])) {
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

    
    </div>

    </div>
</div>




<?php include("../mod/footer.php"); ?>
<?php include("../mod/node_modules.php"); ?>
</body>
</html>