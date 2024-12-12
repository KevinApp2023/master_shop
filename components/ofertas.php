
<?php include("../config/conex.php"); ?>

<div class="container mt-5 ">
  <div class="row ">
    

  
  <div class="w-100 row  rounded shadow p-4  m-0">
      <div class="col">
        <h5>Ofertas</h5>
      </div>
      <div class="col text-end ">
        <a class="link" href="ofertas">Ver todas las ofertas</a>
      </div>
    
      <div class=" row w-100 p-0 mt-3 m-0">


  <?php 

$consult_oferta = "SELECT * FROM (SELECT * FROM products WHERE oferta = '1'  AND estado = '1' ORDER BY id DESC LIMIT 4) subquery ORDER BY id DESC";
$resultado_oferta = $conex->query($consult_oferta);
if ($resultado_oferta->num_rows > 0) {
    while ($data_oferta = $resultado_oferta->fetch_assoc()) { 
?>

<div class="col-6 col-md-3 card-oferta d-flex ">
        <div class="card  p-3 ">
        <img src="<?php echo $data_oferta['img_producto']; ?>" class="card-img-top">
          
        <a href="/product/<?php echo $data_oferta['id']; ?>/<?php echo preg_replace('/[ ,.]/', '_', $data_oferta['producto']); ?>">
          
          <p class="card-title">
            <?php echo strlen($data_oferta['producto']) > 55 ? substr($data_oferta['producto'], 0, 55) . ' . . .' : $data_oferta['producto'];?>
          </p>
        </a>  
          
          
          <p class="card-val fst-italic text-decoration-line-through m-0 text-danger">$ <?php echo $data_oferta['valor_producto']; ?></p>
          <h3 class="card-val-new  m-0">$ <?php echo $data_oferta['valor_producto_oferta']; ?></h3>
        </div>
      </div>



<?php
    }
  }
?>


      </div>
    </div>
  
  </div>
</div>

