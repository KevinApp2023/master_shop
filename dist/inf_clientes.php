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
          
              <div class="row">
               



              


                <div class="col-xl-4">
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Nombres</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="nombres">
                 </div>
 
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Apellidos</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="apellidos">
                 </div>
 
                 <div class="row">
                   <div class="mb-3 col-6">
                     <label for="firstName" class="form-label text-secondary">Correo</label>
                     <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="correo">
                   </div>
                   <div class="mb-3 col-6">
                     <label for="firstName" class="form-label text-secondary">telefono</label>
                     <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="telefono">
                   </div>
                 </div>
 
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Direccion</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="direccion">
                 </div>
 
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Ciudad</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="ciudad">
                 </div>
 
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Pais</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="pais">
                 </div>
 
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Fecha de nacimiento</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="fecha_nacimiento">
                 </div>
 
 
                 <div class="mb-3">
                   <label for="firstName" class="form-label text-secondary">Sexo</label>
                   <input value="" disabled type="text" class="rounded border border-secondary form-control bg-white p-2" id="sexo">
                 </div>
                 </div>

                 <div class="col-xl">
                <div class="hscroll mt-3 mb-2">
                  <table class="table table-bordered  rounded" id="tabla_datos">
                    <thead>
                      <tr>
                      <th class=" p-2 "></th>
      <th class=" p-2 ">Fecha</th>
      <th class=" p-2 ">Hora</th>
      <th class=" p-2 ">N° Pedido</th>
      <th class=" p-2 ">Total</th>
      <th class=" p-2 ">Estado</th>
      <th class=" p-2 w-auto">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="resultadoBusqueda">
                    </tbody>
                  </table>
                </div>
            

<div class="row">
    <div class="col"><a id="whatsapp" target="_blank" class="btn bg-success text-white w-100"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a></div>
    <div class="col"><a id="llamar" class="btn bg-primary text-white w-100"><i class="bi bi-telephone-outbound me-2"></i>Llamar</a></div>
</div>

</div>
              </div>












<style>
  .custom-input {
  border-width: 2px;
  }   
  .hscroll {
  overflow-x: auto;
  overflow-y: auto;
  max-height: 100vh;
  }
  .fil{
  height: 1.875rem;
  }

  table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        td:first-child {
            width: 300px;
            word-wrap: break-word; 
            white-space: normal; 
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
    buscar();
    filtrar();
  

});

function filtrar() {
    var cliente = '<?php echo $_POST['id']; ?>';
     $.ajax({
         url: "/dist/assets/etc/buscar_inf_pedidos_clientes.php",
         method: 'POST',
         data: { 
           cliente: cliente,
         },
         success: function(response) {
             $('#resultadoBusqueda').html(response);
         },
         error: function(xhr, status, error) {
             console.error(error);
         }
     });
}

function buscar() {
    var id = '<?php echo $_POST['id']; ?>';
    if (id) {
        $.ajax({
            url: '/dist/assets/etc/buscar_inf_clientes.php',
            method: 'POST',
            data: { id: id },
            dataType: 'json',
            success: function(data) {
                    $('#nombres').val(data.nombres);
                    $('#apellidos').val(data.apellidos);
                    $('#correo').val(data.correo);
                    $('#telefono').val(data.telefono);
                    $('#direccion').val(data.direccion);
                    $('#ciudad').val(data.ciudad);
                    $('#pais').val(data.pais);
                    $('#fecha_nacimiento').val(data.fecha_nacimiento);
                    $('#sexo').val(data.sexo);
                    $('#whatsapp').attr('href', 'https://wa.me/' + data.telefono);
                    $('#llamar').attr('href', 'tel:' + data.telefono);

                    
            },
            error: function() {
                alert('Ocurrió un error al procesar la solicitud.');
            }
        });
    } else {
        alert('El ID no es válido.');
    }
};

function ver_pedido(id) {
   var form = $('<form>', {
                'method': 'POST',
                'action': '/admin/inf/pedidos' 
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
    <?php  include("../dist/assets/mod/footer.php"); ?>
        </div>
      </div>
    </div>
    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>