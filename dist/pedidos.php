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
            
          
          <div class="row">
            <div class=" col-xl col-md-12 order-2 order-md-1 mb-4">
              <div class="consult">
                <label class="text-secondary">Buscar categoria</label>
           <div class="row">
            <div class="col">
            <input id="buscar_categoria" type="search" class="form-control bg-white rounded mt-2" placeholder="Categoria" aria-label="Search">
            </div>
            
           </div>
            
              </div>

              <div class="hscroll mt-2 mb-2">



<table class="table table-bordered  rounded" id="tabla_datos">
                        
                                <thead>
                                    <tr>
      <th class=" p-2 "></th>
      <th class=" p-2 ">Fecha</th>
      <th class=" p-2 ">Hora</th>
      <th class=" p-2 ">Cliente</th>
      <th class=" p-2 ">Pedido</th>
      <th class=" p-2 ">Total</th>
      <th class=" p-2 ">Estado</th>
      <th class=" p-2 w-auto">Acciones</th>

    
                                        
                                    </tr>
                                </thead>
                                <tbody id="resultadoBusqueda">
    

                              
                                </tbody>
                            </table>
                            </div>




<script>
document.addEventListener('DOMContentLoaded', (event) => {
    filtrar();

});

function filtrar() {
    $.ajax({
        url: "/dist/assets/etc/buscar_pedidos.php",
        method: 'POST',
       // data: { 
       //    // buscar_categoria: document.getElementById('buscar_categoria').value,
       // },
        success: function(response) {
            $('#resultadoBusqueda').html(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}
</script>




            </div>
          </div>






          </div>
    <?php  include("../dist/assets/mod/footer.php"); ?>

 

          
        </div>
      </div>
    </div>
    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>