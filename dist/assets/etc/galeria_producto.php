<?php 
include("../../../config/conex.php"); 
$id = $_GET['id'];

$consult_img_productos = "SELECT * FROM img_productos WHERE productos = '$id'";
$resultado_img_productos = $conex->query($consult_img_productos);
if ($resultado_img_productos->num_rows > 0) {
    while ($data_img_productos = $resultado_img_productos->fetch_assoc()) { 
?>
 
<div class="col-6 col-md-3 p-3 image-container"><img class="shadow rounded " src="<?php echo $data_img_productos['img']; ?>" class="w-100"></div>

<?php }
}
?>

<div class="col-6 col-md-3 p-3 image-container d-flex justify-content-center align-items-center "><a id="subir_galeria_producto" class="shadow rounded bg-secondary w-100 h-100 d-flex justify-content-center align-items-center "><i class="bi bi-plus-square text-white fs-1"></i></a></div>

