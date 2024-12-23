<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<?php include("../mod/head.php"); ?>
<body>
<?php include("../mod/top.php"); ?>
<?php include("../mod/header.php"); ?>


<?php $id = $_GET['id']; ?>


<div class="container mt-5 bg-light-subtle rounded">
    <div class="row">
    <div class="col-md-6 p-4">




    <div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade shadow ">
  <div class="carousel-inner">
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



    <div class="col-md-6 p-4 ">
    <?php 
$consult_productos = "SELECT * FROM products WHERE id = '$id'";
$resultado_productos = $conex->query($consult_productos);
$first = true; 
if ($resultado_productos->num_rows > 0) {
    while ($data_productos = $resultado_productos->fetch_assoc()) { 

      $id = $data_productos['id'];

      $consult_img_productos = "SELECT * FROM img_productos WHERE  productos = '$id' LIMIT 1 ";
      $resultado_img_productos = $conex->query($consult_img_productos);
      if ($resultado_img_productos->num_rows > 0) {
          while ($data_img_productos = $resultado_img_productos->fetch_assoc()) { 



       $d_producto = $data_productos['id'];
       $ref_producto = $data_productos['ref'];
       $category_producto = $data_productos['category'];

       $img_producto = $data_img_productos['img'];

       $url_producto = preg_replace('/[ ,.]/', '_', $data_productos['producto']);
       $producto = $data_productos['producto'];
       $valor_producto_oferta = $data_productos['valor_producto_oferta'];
       $valor_producto = $data_productos['valor_producto'];
       $valor_producto = $data_productos['valor_producto'];
       $descripcion = $data_productos['descripcion'];
       $descripcion_completa = $data_productos['descripcion_completa'];
       $oferta = $data_productos['oferta'];
       $oferta_dia = $data_productos['oferta_dia'];
       if ($data_productos['estado'] == 0){
        $estado = 'disabled';
        $data_estado = '<h4 class="card-val fst-italic m-0 mt-4 text-danger text-center">Producto desactivado</h4>';
       }else{
        $data_estado = 'active';
        $data_estado = '';

       }
    }
}
    }
}


?>
 <h3 id="producto" class="bold-600"><?php echo $producto; ?></h3>
  <p id="ref">Categorias: <?php echo $category_producto; ?></p>
  <p id="ref" class="bold-500">Ref: <?php echo $ref_producto; ?></p>
 <?php if(!empty($valor_producto_oferta) && $oferta == '1' || !empty($valor_producto_oferta) && $oferta_dia == '1' ){?>
<?php $valor = $valor_producto_oferta; ?>
    <h4 class="card-val fst-italic text-decoration-line-through m-0 mt-4 text-danger">$ <?php echo $valor_producto; ?></h4>
    <h3 id="valor_unit" class="card-val bold-700  m-0 mb-5 ">$ <?php echo $valor_producto_oferta; ?></h3>

 <?php } else{?>
<?php $valor = $valor_producto; ?>

    <h3 id="valor_unit" class="card-val bold-700  m-0 mt-4  mb-5">$ <?php echo $valor_producto; ?></h3>

<?php } 
 echo '<div id="descripcion_data">' . $descripcion .'</div>';
 
 ?>

    <div class="row quantity  mr-3 mt-5">
        
    
        <div class="col-auto">
            <button class="btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?> btn-minus">
            <i class="fa fa-minus"></i>
            </button>
        </div>
        
        <div class="col-2">
        <input id="cant" type="text" class=" form-control  text-center " value="1">
        </div>

        <div class="col-auto">
            <button class="btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?> btn-plus">
                <i class="fa fa-plus"></i>
            </button>
        </div>


        <div class="col ">
              <a id="addToCartButton" class="btn <?php echo $TopbgClass . " " . $ToptextClass . " " .  $estado; ?> w-100 "><i class="fa-solid fa-cart-shopping m-2 mt-0 mb-0"></i> Agregar carrito</a>
     
            </div>
         
            <?php echo $data_estado; ?>

    </div>

  



    </div>




</div>

</div>



<div class="container p-0 mt-5">
<nav >
  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-descripcion_completa-tab" data-bs-toggle="tab" data-bs-target="#nav-descripcion_completa" type="button" role="tab" aria-controls="nav-descripcion_completa" aria-selected="true">Descripcion general</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">


  <div class="tab-pane fade show active p-4" id="nav-descripcion_completa" role="tabpanel" aria-labelledby="nav-descripcion_completa-tab" tabindex="0">
      <div id="descripcion__completa_data">
      <?php echo $descripcion_completa; ?>
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
        .create(document.querySelector('#descripcion_data'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Font,
                Heading, List, Link, Image, ImageCaption,
                ImageStyle, ImageToolbar, Table, TableToolbar,
                BlockQuote, Code, CodeBlock, HorizontalLine,
                PageBreak, SpecialCharacters
            ],
            readOnly: true,  
            toolbar: [       
               
            ],
            isReadOnly: true, 
            removePlugins: [  
                
            ]
        })
        .then(editor => {
            console.log('Editor está en modo solo lectura');
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
        .create(document.querySelector('#descripcion__completa_data'), {
            plugins: [
                Essentials, Paragraph, Bold, Italic, Font,
                Heading, List, Link, Image, ImageCaption,
                ImageStyle, ImageToolbar, Table, TableToolbar,
                BlockQuote, Code, CodeBlock, HorizontalLine,
                PageBreak, SpecialCharacters
            ],
            readOnly: true,  
            toolbar: [       
               
            ],
            isReadOnly: true, 
            removePlugins: [  
                
            ]
        })
        .then(editor => {
            console.log('Editor está en modo solo lectura');
        })
        .catch(error => {
            console.error(error);
        });
</script>




















<script>
  document.addEventListener('DOMContentLoaded', () => {
  const elementosCK = document.querySelectorAll('.ck');
  elementosCK.forEach(elemento => {
    elemento.style.borderColor = '#00000000';
    elemento.style.backgroundColor = '#00000000';
  });
});

</script>



<script>
$(document).ready(function() {
  $('#addToCartButton').click(function(e) {
    e.preventDefault(); 

    var d_producto= '<?php echo $d_producto; ?>';
    var ref_producto = '<?php echo $ref_producto; ?>';
    var img_producto = '<?php echo $img_producto; ?>';
    var url_producto = '<?php echo $url_producto; ?>';
    var producto = '<?php echo $producto; ?>';
    var valor_unit = '<?php echo $valor; ?>';
    var cant = $('#cant').val();

    var datos = {
      d_producto: d_producto,
      ref_producto: ref_producto,
      img_producto: img_producto,
      url_producto: url_producto,
      producto: producto,
      valor_unit: valor_unit,
      cant: cant
    };

    $.ajax({
      url: '/c/cart/add',  
      method: 'POST',    
      data: datos,     
      success: function(response) {

        actualizarCarrito();

        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          }
        });

        Toast.fire({
          icon: "success",
          title: "Producto añadido al carrito con éxito"
        });
      },
      error: function(xhr, status, error) {
        alert("Error: " + error);
      }
    });
  });
  actualizarCarrito();
});
</script>








<?php include("../mod/footer.php"); ?>
<?php include("../mod/node_modules.php"); ?>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const quantityGroups = document.querySelectorAll('.row.quantity');

    quantityGroups.forEach(function(group) {
        const btnMinus = group.querySelector('.btn-minus');
        const btnPlus = group.querySelector('.btn-plus');
        const inputField = group.querySelector('.form-control');

        btnMinus.addEventListener('click', function() {
            let currentValue = parseInt(inputField.value);
            if (currentValue > 1) {
                inputField.value = currentValue - 1;
            }
        });

        btnPlus.addEventListener('click', function() {
            let currentValue = parseInt(inputField.value);
            inputField.value = currentValue + 1;
        });

        inputField.addEventListener('input', function() {
            if (isNaN(inputField.value) || inputField.value < 1) {
                inputField.value = 1;
            }
        });
    });
});


</script>

</body>
</html>


