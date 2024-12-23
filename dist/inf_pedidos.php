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
                  <label for="firstName" class="form-label text-secondary">Total</label>
                  <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="total">
                </div>

                <div class="mb-3">
                  <label for="firstName" class="form-label text-secondary">Estado</label>
                  <input value="" type="text" class="rounded border border-secondary form-control bg-white p-2" id="estado">
                </div>


                </div>



                <div class="col-md-6"></div>
              </div>





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
                    $('#total').val(data.total);
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