<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<?php include("../mod/head.php"); ?>
<body>
<?php include("../mod/top.php"); ?>
<?php include("../mod/header.php"); ?>
<?php

if(!isset($_GET['_'])){

$sql_contenido_pagina = "SELECT * FROM pag WHERE pagina = 'home'";
$resultado_contenido_pagina = $conex->query($sql_contenido_pagina);
if ($resultado_contenido_pagina->num_rows > 0) {
  while ($fila_contenido_pagina = $resultado_contenido_pagina->fetch_assoc()) {
    $id = $fila_contenido_pagina['id'];
    $componente = $fila_contenido_pagina['componente'];
    $data_componente = $fila_contenido_pagina['data_componente'];
    $url = '/components/' . $componente . ".php?data=" . $data_componente;
?>
    <div id="componente_<?php echo $componente; ?>_<?php echo $id; ?>">
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var url = '<?php echo $url; ?>';

            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    $('#componente_<?php echo $componente; ?>_<?php echo $id; ?>').html(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error en la solicitud AJAX:", error);
                }
            });
        });
    </script>

<?php
  }
}

}else{ ?>

<div class="container mt-5  ">
<div class="row">
    <div class="col-md-3">
    <ul class="list-group">
  <li id="all" class="list-group-item <?php if(empty($_GET['category'])){echo "active"; } ?>">Todas las categorias</li>
 

  <?php echo $category_banner; ?>

</ul>
    </div>
    <div class="col-md">
        <div id="c_data_products"></div>
    </div>
</div>
</div>



<script>
document.querySelector('#all').addEventListener('click', function() {
    var currentPath = window.location.pathname;
    var newPath = currentPath.replace(/^\/[^/]+\/[^/]+\//, '/');
    window.location.href = newPath;

});


</script>



<script>
    $(document).ready(function() {  
        c_data_products();
    });

   function c_data_products() {  
            $.ajax({
                url: '/c/data/products?category=<?php echo $_GET['category'];?>&_=<?php echo $_GET['_'];  ?>', 
                method: 'GET',
                success: function(response) {
                    $('#c_data_products').html(response);
                },
                error: function() {
                    alert('Hubo un error al actualizar el carrito.');
                }
            });
    };
</script> 







<?php
}







?>
<?php include("../mod/footer.php"); ?>
</body>
</html>