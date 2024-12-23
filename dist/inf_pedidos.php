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
                <div class="col-md-6">
                 
                <div class="mb-3">
                  <label for="firstName" class="form-label text-secondary">N° Pedido</label>
                  <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="pedido">
                </div>

                <div class="mb-3">
                  <label for="firstName" class="form-label text-secondary">Cliente</label>
                  <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="cliente">
                </div>

                <div class="row">
                  <div class="mb-3 col-6">
                    <label for="firstName" class="form-label text-secondary">Fecha</label>
                    <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="fecha">
                  </div>
                  <div class="mb-3 col-6">
                    <label for="firstName" class="form-label text-secondary">Hora</label>
                    <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="hora">
                  </div>
                </div>

                <div class="mb-3">
                  <label for="firstName" class="form-label text-secondary">Referencia Pago</label>
                  <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="ref">
                </div>

         

                <div class="mb-3">
                  <label for="firstName" class="form-label text-secondary">Estado</label>
                  <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="estado">
                </div>


                </div>



                <div class="col-md-6">
                <div class="hscroll mt-3 mb-2">
  <table class="table table-bordered  rounded" id="tabla_datos">
    <thead>
      <tr>
        <th class=" p-2 ">Producto</th>
        <th class=" p-2 ">Unitario</th>
        <th class=" p-2 ">Cantidad</th>
        <th class=" p-2 ">Subtotal</th>
      </tr>
    </thead>
    <tbody id="resultadoBusqueda">
    </tbody>
  </table>
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
    filtrar();

});

function filtrar() {
    $.ajax({
        url: "/dist/assets/etc/buscar_inf_pedidos_productos.php",
        method: 'POST',
        data: { 
          pedido: document.getElementById('pedido').value,
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
  document.addEventListener('DOMContentLoaded', (event) => {
  buscar();
});

function buscar() {
    var id = '<?php echo $_POST['id']; ?>';
    if (id) {
        $.ajax({
            url: '/dist/assets/etc/buscar_inf_pedidos.php',
            method: 'POST',
            data: { id: id },
            dataType: 'json',
            success: function(data) {
                    $('#pedido').val(data.n_pedido);
                    $('#cliente').val(data.cliente);
                    $('#fecha').val(data.fecha);
                    $('#hora').val(data.hora);
                    $('#ref').val(data.ref);
                    $('#estado').val(data.estado);
              
            },
            error: function() {
                alert('Ocurrió un error al procesar la solicitud.');
            }
        });
    } else {
        alert('El ID no es válido.');
    }
};
</script>

          
          </div>
    <?php  include("../dist/assets/mod/footer.php"); ?>
        </div>
      </div>
    </div>
    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>