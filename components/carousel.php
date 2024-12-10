<?php include("../config/conex.php"); ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner z-n1">
<?php 
$data = $_GET['data'];
$consult_carousel = "SELECT * FROM data_carousel WHERE carousel = '$data'";
$resultado_carousel = $conex->query($consult_carousel);
$first = true; 
if ($resultado_carousel->num_rows > 0) {
    while ($data_carousel = $resultado_carousel->fetch_assoc()) { 
        $active_class = $first ? 'active' : '';
        $first = false;
?>
 
      <div class="carousel-item <?php echo $active_class; ?>" >
          <img src="<?php echo $data_carousel['img']; ?>" class="d-block w-100" alt="...">
      </div>
   
<?php }
}
?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
