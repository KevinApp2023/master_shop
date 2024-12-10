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

}else{
    echo $_GET['_'];  
    ?> <br> <?php
    echo $_GET['category']; ?>

<div class="container mt-5  ">
<div class="row">
    <div class="col-md-3">
    <ul class="list-group">
  <li class="list-group-item active" aria-current="true">An active item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
    </div>
    <div class="col-md bg-danger"><br><br><br><br><br></div>
</div>
</div>



















<?php
}







?>
<?php include("../mod/footer.php"); ?>
</body>
</html>