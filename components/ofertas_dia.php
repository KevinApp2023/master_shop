
<?php include("../config/conex.php"); ?>

<div class="container mt-5 ">
  <div class="row ">
    

  
  <div class="w-100 row p rounded shadow p-4  m-0">
      <div class="col">
        <h5>Ofertas del día </h5>
      </div>
      <div class="col text-end ">
        <a class="link" href="ofertas_del_dia">Ver todas las ofertas del día </a>
      </div>
    
      <div class=" row w-100  mt-3">


  <?php 

$consult_oferta_dia = "SELECT * FROM (SELECT * FROM products WHERE oferta = '1' AND oferta_dia = '1'  AND estado = '1' ORDER BY id DESC LIMIT 4) subquery ORDER BY id DESC";
$resultado_oferta_dia = $conex->query($consult_oferta_dia);
if ($resultado_oferta_dia->num_rows > 0) {
    while ($data_oferta_dia = $resultado_oferta_dia->fetch_assoc()) { 
?>

<div class="col-6 col-md-3 card-oferta">
        <div class="card  p-3">
        <img src="<?php echo $data_oferta_dia['img_producto']; ?>" class="card-img-top">
        
        <a href="/product/<?php echo str_replace(' ', '_', $data_oferta_dia['producto']); ?>">
          <p class="card-title">
            <?php echo strlen($data_oferta_dia['producto']) > 55 ? substr($data_oferta_dia['producto'], 0, 55) . ' . . .' : $data_oferta_dia['producto'];?>
          </p>
        </a>

          <p class="card-val fst-italic text-decoration-line-through m-0 text-danger">$ <?php echo $data_oferta_dia['valor_producto']; ?></p>
          <h3 class="card-val-new  m-0">$ <?php echo $data_oferta_dia['valor_producto_oferta']; ?></h3>
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
