<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <?php include("../dist/assets/mod/head.php");?>
  <body>
    <div class="container-scroller">
    <?php include("../dist/assets/mod/navbar.php");?>
  
    <div class="main-panel">

          <div class="content-wrapper" >
          
          <?php
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



          <div class="container rounded card p-4">

      
    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Nombre Producto</label>
      <input id="producto" value="<?= $producto ?>"  type="text" class="rounded border border-secondary form-control bg-white p-2"  placeholder="Producto">
    </div>

    <div class="row">
    
   
    <div class="col-md">
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
          <a class="btn text-white bg-danger  d-flex p-2 me-1" onclick="dele_category()"><i class="bi bi-trash"></i></a>
          <a class="btn text-white bg-success d-flex p-2 " data-bs-toggle="modal" data-bs-target="#add_category"><i class="bi bi-node-plus"></i></a>
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

</div>

<div class="col-md">

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
      <label for="firstName" class="form-label text-secondary">Estado</label>
      <select id="estado"   type="number" class="rounded border border-secondary form-control bg-white p-2">
      <?php if ( $estado == 1){ echo '<option value="1">Activo</option>'; }else{ echo '<option value="0">Inactivo</option>';}?>
      <hr>
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
      </select>
    </div>

</div>
    </div>
  
 
    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Descripcion corta</label>
       <div  id="descripcion"  style="width: 100%;" style="color:black;">
         <?= $descripcion ?>
      </div>
    </div>
    <div class="mb-3">
      <label for="firstName" class="form-label text-secondary">Descripcion completa</label>
       <div  id="descripcion_completa"  style="width: 100%;" style="color:black;">
         <?= $descripcion_completa ?>
      </div>
    </div>

    <div class="mb-3 mt-3">
  <label for="firstName" class="form-label text-secondary">Galería de imágenes del producto</label>
  <div class="row" id="galeria_producto">
     
  </div>

  



</div>


<script>
     document.addEventListener('DOMContentLoaded', function() {
        c_data_products();
    });

   function c_data_products() {  
            $.ajax({
                url: '/dist/assets/etc/galeria_producto.php?id=<?=$id?>', 
                method: 'GET',
                success: function(response) {
                    $('#galeria_producto').html(response);
                },
                error: function() {
                    alert('Hubo un error al actualizar el carrito.');
                }
            });
    };
</script> 

<style>
 /* Asegura que las columnas tengan la misma altura */
.image-container {
  height: 300px; /* Altura estándar para todas las columnas */
  display: flex;
  align-items: center; /* Centra las imágenes verticalmente */
  justify-content: center; /* Centra las imágenes horizontalmente */
  overflow: hidden; /* Asegura que no haya desbordamiento */
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: contain; /* Ajusta la imagen para que quede completamente dentro del contenedor */
}


</style>

    <div class="row mt-5 ">
      <div class="col-md-6 col-12 text-center p-2"><a onclick="eliminar_producto()"class="w-100 btn text-white bg-danger"><i class="bi bi-trash me-2"></i>Eliminar</a></div>
      <div class="col-md-6 col-12 text-center p-2"><a onclick="guardar_cambios()" class="w-100 btn text-white bg-success"><i class="bi bi-floppy me-2"></i>Guardar cambios</a></div>
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
        <button type="button" class="btn text-white bg-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn text-white bg-success" data-bs-dismiss="modal" onclick="add_category()">Agregar</button>
      </div>
    </div>
  </div>
</div>







<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
        }
    }
</script>
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font,
        Heading,
        List,
        Link,
        Image,
        ImageCaption,
        ImageStyle,
        ImageToolbar,
        Table,
        TableToolbar,
        BlockQuote,
        Code,
        CodeBlock,
        HorizontalLine,
        PageBreak,
        SpecialCharacters
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#descripcion'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Font,
                Heading, List, Link, Image, ImageCaption,
                ImageStyle, ImageToolbar, Table, TableToolbar,
                BlockQuote, Code, CodeBlock, HorizontalLine,
                PageBreak, SpecialCharacters
            ],
            toolbar: [
                'undo', 'redo', '|',
                'heading', '|',
                'bold', 'italic', '|',
                'link', 'bulletedList', 'numberedList', '|',
                'blockQuote', 'insertTable', 'imageUpload', '|',
                'code', 'codeBlock', '|',
                'horizontalLine', 'pageBreak', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                'specialCharacters'
            ],
            image: {
                toolbar: [
                    'imageTextAlternative', 'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight'
                ]
            },
        })
        
        .then(editor1 => {
            window.editor1 = editor1;

            // Agregar el evento de clic al botón
            document.getElementById('showHtmlButton').addEventListener('click', () => {
                const htmlContent = editor1.getData();
                alert(htmlContent);
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>




<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
        }
    }
</script>
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font,
        Heading,
        List,
        Link,
        Image,
        ImageCaption,
        ImageStyle,
        ImageToolbar,
        Table,
        TableToolbar,
        BlockQuote,
        Code,
        CodeBlock,
        HorizontalLine,
        PageBreak,
        SpecialCharacters
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#descripcion_completa'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Font,
                Heading, List, Link, Image, ImageCaption,
                ImageStyle, ImageToolbar, Table, TableToolbar,
                BlockQuote, Code, CodeBlock, HorizontalLine,
                PageBreak, SpecialCharacters
            ],
            toolbar: [
                'undo', 'redo', '|',
                'heading', '|',
                'bold', 'italic', '|',
                'link', 'bulletedList', 'numberedList', '|',
                'blockQuote', 'insertTable', 'imageUpload', '|',
                'code', 'codeBlock', '|',
                'horizontalLine', 'pageBreak', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                'specialCharacters'
            ],
            image: {
                toolbar: [
                    'imageTextAlternative', 'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight'
                ]
            },
        })

        
        .then(editor2 => {
            window.editor2 = editor2;

            // Agregar el evento de clic al botón
            document.getElementById('showHtmlButton').addEventListener('click', () => {
                const htmlContent = editor2.getData();
                alert(htmlContent);
            });
        })
        .catch(error => {
            console.error(error);
        });
</script> 




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


<script>
    function guardar_cambios() {
        Swal.fire({
            title: "¿Quieres guardar los cambios?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Guardar",
            denyButtonText: `No guardar`,
            icon: 'question',
        }).then((result) => {
            if (result.isConfirmed) {

                var form_data = new FormData();
                form_data.append('id', '<?php echo $id ?>');
                form_data.append('ref', $('#ref').val());
                form_data.append('producto', $('#producto').val());
                form_data.append('descripcion', editor1.getData());
                form_data.append('descripcion_completa', editor2.getData());
                form_data.append('category', $('#category').val());
                form_data.append('valor_producto', $('#valor_producto').val());
                form_data.append('popular', $('#popular').val());
                form_data.append('Oferta', $('#Oferta').val());
                form_data.append('valor_producto_oferta', $('#valor_producto_oferta').val());
                form_data.append('oferta_dia', $('#oferta_dia').val());
                form_data.append('estado', $('#estado').val());

                $.ajax({
                    type: "POST",
                    url: "/dist/assets/etc/guardar_cambios_producto.php",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === 'success') {
                            Swal.fire("¡Guardado!", "Los cambios han sido guardados correctamente.", "success")
                                .then(() => {
                                    window.location.reload();  
                                });
                        } else {
                            Swal.fire("Error", "Ocurrió un error al guardar los cambios.", "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire("Error", "No se pudo realizar la solicitud. Inténtalo nuevamente.", "error");
                        console.error("Error en la solicitud AJAX:", status, error);
                    }
                });
            } else if (result.isDenied) {
                Swal.fire("Los cambios no se guardan", "", "info");
            }
        });
    }
</script>




<script>
    function eliminar_producto() {
        Swal.fire({
            title: "¿Quieres eliminar?",
            showDenyButton: true,
            confirmButtonText: "Si Eliminar",
            denyButtonText: `No, Cancelar`,
            icon: 'question',
        }).then((result) => {
            if (result.isConfirmed) {

                var form_data = new FormData();
                form_data.append('id', '<?php echo $id ?>');


                $.ajax({
                    type: "POST",
                    url: "/dist/assets/etc/eliminar_producto.php",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                     
                            Swal.fire("¡Eliminado!", "El producto se ha eliminado correctamente", "success")
                                .then(() => {
                                    window.location = "/admin/productos";  
                                });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire("Error", "No se pudo realizar la solicitud. Inténtalo nuevamente.", "error");
                        console.error("Error en la solicitud AJAX:", status, error);
                    }
                });
            } else if (result.isDenied) {
                Swal.fire("No se ha eliminado el producto", "", "info");
            }
        });
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