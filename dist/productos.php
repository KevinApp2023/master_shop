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
                <label class="text-secondary">Buscar producto</label>
              <input id="buscar_producto" type="search" class="form-control bg-white rounded mt-2" placeholder="Producto" aria-label="Search">
              </div>

              <div class="hscroll mt-2 mb-2">



<table class="table table-bordered  rounded" id="tabla_datos">
                        
                                <thead>
                                    <tr>
      <th class="m-0 text-center w-auto"></th>
      <th class="m-0 p-2">Ref</th>
      <th class="m-0 p-2">Producto</th>
      <th class="m-0 p-2">Valor</th>
      <th class="m-0 p-2 text-center">Estado</th>
      <th class="">Acciones</th>

    
                                        
                                    </tr>
                                </thead>
                                <tbody id="resultadoBusqueda" class="p-0">
    

                              
                                </tbody>
                            </table>




                            </div>



<style>
    
    /* Reglas de CSS personalizadas */
    .custom-input {
      border-width: 2px;
      
    }   .hscroll {
                  overflow-x: auto; /* Horizontal */
                  overflow-y: auto; /* Horizontal */
                max-height: 100vh;
                
                }

                .fil{
                    height: 1.875rem;
                }
</style>






<script>
document.addEventListener('DOMContentLoaded', (event) => {
    // Ejecutar la función filtrar cuando se cargue la página
    filtrar();

    // Ejecutar la función filtrar cuando se presione "Enter" en el input#buscar_producto
    document.getElementById('buscar_producto').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            filtrar();
        }
    });
});

function filtrar() {
    $.ajax({
        url: "/dist/assets/etc/buscar_producto.php",
        method: 'POST',
        data: { 
            buscar_producto: document.getElementById('buscar_producto').value,
        },
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
            <div class="col-xl-3 col-md-12 order-1 order-md-2 mb-4">
              <div class="documentacion w-100">
              <label class="text-secondary">Documentacion</label>
         
              <div class="card rounded mt-2 p-2 w-100">

                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Desactivado <i class="ms-2 bi bi-circle-fill text-secondary"></i> <i class="bi bi-circle-fill text-secondary"></i> <i class="bi bi-circle-fill text-secondary"></i> </label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Popular  <i class="ms-2 bi bi-circle-fill text-primary"></i> </label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Oferta  <i class="ms-2 bi bi-circle-fill text-success"></i> </label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Oferta del día  <i class="ms-2 bi bi-circle-fill text-warning"></i> </label>





              </div>
          
              </div>
            </div>
          </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


          </div>
    <?php  include("../dist/assets/mod/footer.php"); ?>

    <script>
      function editar() {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Deseas editar los datos?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, Editar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        

                        
                    }
                });
              }
</script>



<script>
      function eliminar(id) {
          
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Deseas ir a facturacion?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, Continuar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                       
                    }
                });
              }
    </script>

          
        </div>
      </div>
    </div>
    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>