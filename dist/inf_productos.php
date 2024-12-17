<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include("../dist/assets/mod/head.php");?>
  <body>
    <div class="container-scroller">
    <?php include("../dist/assets/mod/navbar.php");?>
  
    <div class="main-panel">

          <div class="content-wrapper" >
          
          <?=
          
          
          $id = $_POST['id']; 

        
$consult_productos = "SELECT * FROM products WHERE id = '$id'";
$resultado_productos = $conex->query($consult_productos);
$first = true; 
if ($resultado_productos->num_rows > 0) {
    while ($data_productos = $resultado_productos->fetch_assoc()) { 
    
      $producto = $data_productos['producto'];
       $d_producto = $data_productos['id'];
       $ref_producto = $data_productos['ref'];
       $category_producto = $data_productos['category'];
       $img_producto = $data_productos['img_producto'];
       $url_producto = preg_replace('/[ ,.]/', '_', $data_productos['producto']);
       $valor_producto_oferta = $data_productos['valor_producto_oferta'];
       $valor_producto = $data_productos['valor_producto'];
       $valor_producto = $data_productos['valor_producto'];
       $descripcion = $data_productos['descripcion'];
       $descripcion_completa = $data_productos['descripcion_completa'];
       $popular = $data_productos['popular'];
       $oferta = $data_productos['oferta'];
       $oferta_dia = $data_productos['oferta_dia'];
       $estado = $data_productos['estado'];

    }
}

?>



          <div class="container">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#informacion_general" type="button" role="tab" aria-controls="informacion_general" aria-selected="true">Informacion general</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Descripciones</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Galeria</button>
  </li>
  <li class="nav-item" role="presentation">
  </li>
</ul>


<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="informacion_general" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Nombre Producto</label>
      <input id="producto" value="<?= $producto ?>"  type="text" class="rounded border border-secondary form-control bg-white p-2"  placeholder="Producto">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Referencia</label>
      <input id="ref" value="<?= $ref_producto ?>"  type="text" class="rounded border border-secondary form-control bg-white p-2"  placeholder="Ref">
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Categorias</label>
      <div class="row  g-2 d-flex ">
        <div class="col d-flex">
          <input id="category" value="<?= $category_producto ?>"  type="text" class="d-flex rounded border border-secondary form-control bg-white p-2"  placeholder="Categorias">
        </div>
        <div class="col-auto d-flex">
          <a class="btn btn-danger  d-flex p-2 me-1" onclick="dele_category()"><i class="bi bi-trash"></i></a>
          <a class="btn btn-success d-flex p-2 " data-bs-toggle="modal" data-bs-target="#add_category"><i class="bi bi-node-plus"></i></a>
        </div>
      </div>


<div class="modal fade" id="add_category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="firstName" class="form-label text-secondary">Lista de categorias</label>

      <select id="data_add_category" class="rounded border border-secondary form-control bg-white p-2">
 <option value=""></option>
      <?php
$consult_category = "SELECT * FROM category";
$resultado_category = $conex->query($consult_category);
$first = true; 
if ($resultado_category->num_rows > 0) {
    while ($data_category = $resultado_category->fetch_assoc()) { 
    echo '<option value="' . $data_category['name'] . '">' .  $data_category['name'] . '</option>';

    }
  }
      ?>

</select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" onclick="add_category()">Agregar</button>
      </div>
    </div>
  </div>
</div>

    </div>




    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Valor del producto</label>
      <input id="valor_producto" value="<?= $valor_producto ?>"  type="number" class="rounded border border-secondary form-control bg-white p-2"  placeholder="Valor del producto">
    </div>


    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Pupular</label>
      <select id="popular"   type="number" class="rounded border border-secondary form-control bg-white p-2"  >
      <?php if ( $popular == 1){ echo '<option value="1">Si</option>'; }else{ echo '<option value="0">No</option>';}?>
      <hr>
      <option value="1">Si</option>
      <option value="0">No</option>
      </select>
    </div>


    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Oferta</label>
      <select id="Oferta"   type="number" class="rounded border border-secondary form-control bg-white p-2" >
      <?php if ( $Oferta == 1){ echo '<option value="1">Si</option>'; }else{ echo '<option value="0">No</option>';}?>
      <hr>
      <option value="1">Si</option>
      <option value="0">No</option>
      </select>
    </div>


    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Valor del producto en oferta</label>
      <input id="valor_producto_oferta" value="<?php if ($valor_producto_oferta == 0){echo '';}else{echo $valor_producto_oferta; } ?>"  type="number" class="rounded border border-secondary form-control bg-white p-2"  placeholder="Valor del producto en oferta">
    </div>


    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Oferta del día</label>
      <select id="oferta_dia"   type="number" class="rounded border border-secondary form-control bg-white p-2">
      <?php if ( $oferta_dia == 1){ echo '<option value="1">Si</option>'; }else{ echo '<option value="0">No</option>';}?>
      <hr>
      <option value="1">Si</option>
      <option value="0">No</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Oferta del día</label>
      <select id="oferta_dia"   type="number" class="rounded border border-secondary form-control bg-white p-2">
      <?php if ( $estado == 1){ echo '<option value="1">Activo</option>'; }else{ echo '<option value="0">Inactivo</option>';}?>
      <hr>
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
      </select>
    </div>




  </div>
  
  
  
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
 
 
 
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
</div>


            
          </div>



          <script>
  function dele_category() {
    $('#category').val('');
  };
</script>



<script>
  function add_category() {
      var selectedCategory = $('#data_add_category').val();
      var currentValue = $('#category').val();
      if( currentValue  != '' ) {
        var updatedValue = currentValue  + ', ' + selectedCategory;
      }else{
        var updatedValue = currentValue + selectedCategory;
      }
     

      $('#category').val(updatedValue);
    
  }
</script>





          </div>
    <?php  include("../dist/assets/mod/footer.php"); ?>

          
        </div>
      </div>
    </div>
    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>