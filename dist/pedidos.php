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
            <input class="bg-white form-control custom-input " Placeholder="N° Pedido" type="text" name="pedido" id="pedido">
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input"  Placeholder="Fecha inicio" type="date"  name="fecha_inicio" id="fecha_inicio" >
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input"  Placeholder="Fecha final" type="date"  name="fecha_final" id="fecha_final">
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input" Placeholder="Nombres" type="text" name="nombres" id="nombres" >
            </div>
            
            <div class="col-md col-12 mb-2 p-2 d-flex">
            <input class="bg-white form-control custom-input " Placeholder="Apellidos" type="text" name="apellidos" id="apellidos" >
            </div>

            <div class="col-md col-12 mb-2 p-2 d-flex">
            <select class="border-light-subtle bg-white form-control custom-input p-3 d-flex" id="estado" name="estado" > 
            <option value="" >Estado</option>  
            <option value="1" >pendiente</option>  
            <option value="2" >Aprobado</option>  
            <option value="3" >Confirmado</option>  
            <option value="4" >En proceso</option>  
            <option value="5" >Enviado</option>  
            <option value="6" >Entregado</option>  
            <option value="7" >Cancelado</option>  
            <option value="8" >Devuelto</option>  
            <option value="9" >Reembolsado</option>  
            </select>
            </div>

            <div class="col-md-auto col mb-2 p-2 d-flex justify-content-center align-items-center ">
            <a class="rounded text-center bg-primary text-white w-100 p-2 ps-3 h-100 d-flex justify-content-center align-items-center"><i class="bi bi-search me-2"></i></a>
            </div>


           </div>
            


           
           <script>
  async function fecha_inicio() {
    const { value: selectedDate } = await Swal.fire({
      title: 'Seleccione la fecha inicio',
      input: 'date',
      
    });

    if (selectedDate) {
      const formattedDate = formatDate(selectedDate);
      document.getElementById('fecha_inicio').value = formattedDate;
    }
  }

  function formatDate(date) {
    const [year, month, day] = date.split('-');
    return `${year}-${month}-${day}`;
  }
</script>


<script>
  async function fecha_final() {
    const { value: selectedDate } = await Swal.fire({
      title: 'Seleccione la fecha de limite',
      input: 'date',
      
    });

    if (selectedDate) {
      const formattedDate = formatDate(selectedDate);
      document.getElementById('fecha_final').value = formattedDate;
    }
  }

  function formatDate(date) {
    const [year, month, day] = date.split('-');
    return `${year}-${month}-${day}`;
  }
</script>


              </div>

              <div class="hscroll mt-3 mb-2">



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
    // Obtener el elemento con la clase .hscroll
    var hscrollElement = document.querySelector('.hscroll');
    
    // Función para ajustar la altura de .hscroll al máximo de la pantalla visible
    function ajustarAltura() {
        var windowHeight = window.innerHeight; // Altura de la ventana del navegador
        var hscrollElementRect = hscrollElement.getBoundingClientRect(); // Dimensiones del elemento .hscroll
        
        // Calcular la nueva altura
        var nuevaAltura = windowHeight - hscrollElementRect.top;
        
        // Aplicar la nueva altura al elemento .hscroll
        hscrollElement.style.maxHeight = nuevaAltura + 'px';
    }
    
    // Llamar a la función para ajustar la altura cuando la página se carga y se cambia el tamaño de la ventana
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