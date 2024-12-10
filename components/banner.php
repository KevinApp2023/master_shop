<?php 
include("../config/conex.php");
$data = $_GET['data'];
$consult_banner = "SELECT * FROM banner WHERE id = '$data'";
$resultado_banner = $conex->query($consult_banner);
if ($resultado_banner->num_rows > 0) {
    while ($data_banner = $resultado_banner->fetch_assoc()) { 
if(!empty($data_banner['url_opcional'])){ ?>
    <div class="container  mt-5  ">
      <a href="<?php echo $data_banner['url_opcional'];?>">
        <img src="<?php echo $data_banner['img'];?>" class="  w-100 rounded  ">
      </a>
    </div>
 <?php
}else{  ?>
  <div class="container  mt-5  ">
      <img src="<?php echo $data_banner['img'];?>" class="  w-100 rounded  ">
  </div>
<?php } 
    }
  }
  ?>