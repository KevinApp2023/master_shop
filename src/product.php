<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<?php include("../mod/head.php"); ?>
<body>
<?php include("../mod/top.php"); ?>
<?php include("../mod/header.php"); ?>


<?php $id = $_GET['id']; ?>


<div class="container mt-5">
    <div class="row">
    <div class="col-md-6 p-3">




    <div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade shadow ">
  <div class="carousel-inner z-n1">
<?php 
$consult_img_productos = "SELECT * FROM img_productos WHERE productos = '$id'";
$resultado_img_productos = $conex->query($consult_img_productos);
$first = true; 
if ($resultado_img_productos->num_rows > 0) {
    while ($data_img_productos = $resultado_img_productos->fetch_assoc()) { 
        $active_class = $first ? 'active' : '';
        $first = false;
?>
 
      <div class="carousel-item <?php echo $active_class; ?>" >
          <img src="<?php echo $data_img_productos['img']; ?>" class="d-block w-100" alt="...">
      </div>
   
<?php }
}
?>
  </div>
  <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class=" carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class=" carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>



    <div class="col-md-6 p-3">
    <?php 
$consult_productos = "SELECT * FROM products WHERE id = '$id'";
$resultado_productos = $conex->query($consult_productos);
$first = true; 
if ($resultado_productos->num_rows > 0) {
    while ($data_productos = $resultado_productos->fetch_assoc()) { 
?>
 <h3 class="bold-600"><?php echo $data_productos['producto']; ?></h3>

 <?php if(!empty($data_productos['valor_producto_oferta'])){?>

    <h4 class="card-val fst-italic text-decoration-line-through m-0 mt-4 text-danger">$ <?php echo $data_productos['valor_producto']; ?></h4>
    <h3 class="card-val bold-700  m-0 mb-5 ">$ <?php echo $data_productos['valor_producto_oferta']; ?></h3>

 <?php } else{?>
    <h3 class="card-val bold-700  m-0 mt-4  mb-5">$ <?php echo $data_productos['valor_producto']; ?></h3>

<?php } 

 echo $data_productos['descripcion']; 

}
}

?>



    </div>




</div>
</div>




<?php include("../mod/footer.php"); ?>
</body>
</html>


