
<?php include("../config/conex.php");

$category = $_GET['category'];


if ($_GET['_'] == 'all'){
  $consulta = '';
}else{
  $consulta = $_GET['_'];
}

$where = "WHERE 1=1";



if (!empty($consulta)) {
  $where .= " AND producto LIKE '%$consulta%'";
}

if (!empty($category)) {
  $where .= " AND category LIKE '%$category%'";

}

$where .= " ORDER BY id DESC";

?>
      <div class=" row w-100 p-0 m-0 ">
  <?php 

$consult_data_c = "SELECT * FROM products $where ";
$resultado_data_c = $conex->query($consult_data_c);
if ($resultado_data_c->num_rows > 0) {
    while ($data_c = $resultado_data_c->fetch_assoc()) { 
?>

<div class="col-12 col-md-4 card-oferta d-flex mb-2 mt-2 p-0 m-0 ">
      <div class="p-2 d-flex ">

        <div class="row rounded shadow p-2 m-0">

        <div class="col-4 col-md-12 border border-top-0 border-end-0 border-start-0 d-flex align-items-center" >
          <img src="<?php echo $data_c['img_producto']; ?>" class="card-img-top">
        </div>


        <div class="col col-md mt-2">
        <a href="/product/<?php echo $data_c['id']; ?>/<?php echo preg_replace('/[ ,.]/', '_', $data_c['producto']); ?>">
          <p class="card-title">
            <?php echo strlen($data_c['producto']) > 55 ? substr($data_c['producto'], 0, 55) . ' . . .' : $data_c['producto'];?>
          </p>
        </a>
  
        
          <?php if(!empty($data_c['valor_producto_oferta']) && $data_c['oferta'] == '1' || !empty($data_c['valor_producto_oferta']) && $data_c['oferta_dia'] == '1' ){?>
          <p class="card-val fst-italic text-decoration-line-through m-0 text-danger">$ <?php echo $data_c['valor_producto']; ?></p>
          <h3 class="card-val-new  ">$ <?php echo $data_c['valor_producto_oferta']; ?></h3>
           <?php } else{?>
            <h3 class="card-val-new   mt-4 ">$ <?php echo $data_c['valor_producto']; ?></h3>
          <?php }  ?>
        </div>
        </div>
     
     
      </div>




</div>


<?php
    }
  }
?>


      </div>

