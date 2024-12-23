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
    
           <div class="row ">
            
            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input " Placeholder="Nombres" type="text" name="nombres" id="nombres">
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input"  Placeholder="Apellidos" type="text"  name="apellidos" id="apellidos" >
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input"  Placeholder="Correo" type="mail"  name="correo" id="correo">
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input" Placeholder="Telefono" type="text" name="telefono" id="telefono" >
            </div>
            
            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input " Placeholder="Direcciom" type="text" name="direccion" id="direccion" >
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input " Placeholder="Ciudad" type="text" name="ciudad" id="ciudad" >
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input " Placeholder="Pais" type="text" name="pais" id="pais" >
            </div>

            

            <div class="col-md-auto col mb-2 p-2 d-flex justify-content-center align-items-center ">
            <a onclick="filtrar()"class="rounded text-center bg-primary text-white w-100 p-2 ps-3 h-100 d-flex justify-content-center align-items-center"><i class="bi bi-search me-2"></i></a>
            </div>


           </div>
            




              </div>

              <div class="hscroll mt-3 mb-2">



<table class="table table-bordered  rounded" id="tabla_datos">
                        
                                <thead>
                                    <tr>
      <th class=" p-2 "></th>
      <th class=" p-2 ">Nombres</th>
      <th class=" p-2 ">Apellidos</th>
      <th class=" p-2 ">Correo</th>
      <th class=" p-2 ">Telefono</th>
      <th class=" p-2 ">Direccion</th>
      <th class=" p-2 ">Ciudad</th>
      <th class=" p-2 ">Pais</th>
      <th class=" p-2 w-auto">Acciones</th>

    
                                        
                                    </tr>
                                </thead>
                                <tbody id="resultadoBusqueda">
    

                              
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



<script>window.addEventListener('DOMContentLoaded', function() {
    var hscrollElement = document.querySelector('.hscroll');
    function ajustarAltura() {
        var windowHeight = window.innerHeight;
        var hscrollElementRect = hscrollElement.getBoundingClientRect()
        var nuevaAltura = windowHeight - hscrollElementRect.top;
        hscrollElement.style.maxHeight = nuevaAltura + 'px';
    }
    ajustarAltura();
    window.addEventListener('resize', ajustarAltura);
});
</script>


<script>
document.addEventListener('DOMContentLoaded', (event) => {
    filtrar();

});

function filtrar() {
    $.ajax({
        url: "/dist/assets/etc/buscar_clientes.php",
        method: 'POST',
        data: { 
          nombres: document.getElementById('nombres').value,
          apellidos: document.getElementById('apellidos').value,
          correo: document.getElementById('correo').value,
          telefono: document.getElementById('telefono').value,
          direccion: document.getElementById('direccion').value,
          ciudad: document.getElementById('ciudad').value,
          pais: document.getElementById('pais').value,
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


<script>
function ver_cliente(id) {
   var form = $('<form>', {
                'method': 'POST',
                'action': '/admin/inf/clientes' 
            });
            
            $('<input>').attr({
                'type': 'hidden',
                'name': 'id',
                'value': id 
            }).appendTo(form);
            
            form.appendTo('body').submit();
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