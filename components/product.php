
<?php include("../config/conex.php");

$category = $_GET['category'];
$consulta = $_GET['_'];



$where = "WHERE 1=1";



if (!empty($consulta)) {
  $where .= " AND producto LIKE '%$consulta%'";
}

if (!empty($category)) {
  $where .= " AND category LIKE '%$category%'";

}

$where .= " ORDER BY id DESC";

?>
      <div class=" row w-100  ">
  <?php 

$consult_data_c = "SELECT * FROM products $where ";
$resultado_data_c = $conex->query($consult_data_c);
if ($resultado_data_c->num_rows > 0) {
    while ($data_c = $resultado_data_c->fetch_assoc()) { 
?>

<div class="col-6 col-md-4 card-oferta ">
        <div class="  p-4 shadow">
        <img src="<?php echo $data_c['img_producto']; ?>" class="card-img-top">
        
        <a href="/product/<?php echo $data_c['id']; ?>/<?php echo preg_replace('/[ ,.]/', '_', $data_c['producto']); ?>">
          <p class="card-title">
            <?php echo strlen($data_c['producto']) > 55 ? substr($data_c['producto'], 0, 55) . ' . . .' : $data_c['producto'];?>
          </p>
        </a>

          <p class="card-val fst-italic text-decoration-line-through m-0 text-danger">$ <?php echo $data_c['valor_producto']; ?></p>
          <h3 class="card-val-new  m-0">$ <?php echo $data_c['valor_producto_oferta']; ?></h3>
        </div>
      </div>



<?php
    }
  }
?>


      </div>

