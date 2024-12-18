<?php 
include("../../../config/conex.php"); 
$id = $_GET['id'];

$consult_img_productos = "SELECT * FROM img_productos WHERE productos = '$id'";
$resultado_img_productos = $conex->query($consult_img_productos);
if ($resultado_img_productos->num_rows > 0) {
    while ($data_img_productos = $resultado_img_productos->fetch_assoc()) { 
?>
 
<div class="col-6 col-md-3 p-3 image-container position-relative"><a onclick="eliminar_img_producto('<?php echo $data_img_productos['id']; ?>', '<?php echo $data_img_productos['img']; ?>')" class="p-2 rounded btn bg-danger text-white position-absolute bottom-0"><i class="bi bi-trash "></i>Eliminar</a><img class="shadow rounded " src="<?php echo $data_img_productos['img']; ?>" class="w-100"></div>

<?php }
}
?>

<div class="col-6 col-md-3 p-3 image-container d-flex justify-content-center align-items-center "><a id="subir_galeria_producto" class="shadow rounded bg-secondary w-100 h-100 d-flex justify-content-center align-items-center "><i class="bi bi-plus-square text-white fs-1"></i></a></div>

<input type="file" id="agregar_nueva_galeria_data" class="d-none">



<script>
$(document).ready(function() {
  $('#subir_galeria_producto').click(function(e) {
    e.preventDefault(); 
    $('#agregar_nueva_galeria_data').click();
  });

  $('#agregar_nueva_galeria_data').change(function() {
    guardar_cambios_galeria();
  });
});


function guardar_cambios_galeria() {
  var file = $('#agregar_nueva_galeria_data')[0].files[0];
  if (!file) {
    alert('Por favor selecciona un archivo para subir.');
    return;
  }
  
  var form_data = new FormData();
  form_data.append('id', '<?= $_GET['id']; ?>');
  form_data.append('agregar_nueva_galeria_data', file);

  $.ajax({
    type: "POST",
    url: "/dist/assets/etc/subir_galeria_producto.php",
    data: form_data,
    contentType: false,
    processData: false,
    success: function(response) {
      c_data_products();
    },
    error: function(xhr, status, error) {
      alert('Error al subir el archivo: ' + error);
    }
  });
}



function eliminar_img_producto(id, foto) {
  
  var form_data = new FormData();
  form_data.append('id', id);
  form_data.append('foto', foto);

  $.ajax({
    type: "POST",
    url: "/dist/assets/etc/eliminar_img_producto.php",
    data: form_data,
    contentType: false,
    processData: false,
    success: function(response) {
      c_data_products();
    },
    error: function(xhr, status, error) {
      alert('Error al subir el archivo: ' + error);
    }
  });
}


</script>
