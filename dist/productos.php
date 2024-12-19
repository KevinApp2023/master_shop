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
           <div class="row">
            <div class="col">
            <input id="buscar_producto" type="search" class="form-control bg-white rounded mt-2" placeholder="Producto" aria-label="Search">
            </div>
            <div class="col-auto">
              <a  data-bs-toggle="modal" data-bs-target="#crear_nuevo_producto" class="btn btn-dark  mt-2 p-3"><i class="bi bi-plus-square me-2"></i>Nuevo</a>
            </div>
           </div>
            
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


<script>
function crear_nuevo_producto() {
    $.ajax({
        url: "/dist/assets/etc/crear_nuevo_producto.php",
        method: 'POST',
        data: { 
            producto: document.getElementById('producto').value,
        },
        success: function(response) {
            var form = $('<form>', {
                'method': 'GET',
                'action': '/admin/inf/productos' 
            });
            
            $('<input>').attr({
                'type': 'hidden',
                'name': 'id',
                'value': 'response' 
            }).appendTo(form);
            
            form.appendTo('body').submit();
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    }); 
}
</script>



<script>
      function editar(id) {
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¿Deseas editar los datos?",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, Editar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        
                        var form = $('<form>', {
                            'method': 'POST',
                            'action': '/admin/inf/productos' 
                        });

                        $('<input>').attr({
                            'type': 'hidden',
                            'name': 'id',
                            'value': id 
                        }).appendTo(form);

                        form.appendTo('body').submit();
                        
                    }
                });
              }
</script>



               



<script>
document.addEventListener('DOMContentLoaded', (event) => {
    filtrar();

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






<script>
    function eliminar_producto(id) {
        Swal.fire({
            title: "¿Quieres eliminar?",
            showDenyButton: true,
            confirmButtonText: "Si Eliminar",
            denyButtonText: `No, Cancelar`,
            icon: 'question',
        }).then((result) => {
            if (result.isConfirmed) {

                var form_data = new FormData();
                form_data.append('id', id);


                $.ajax({
                    type: "POST",
                    url: "/dist/assets/etc/eliminar_producto.php",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                     
                            Swal.fire("¡Eliminado!", "El producto se ha eliminado correctamente", "success")
                                .then(() => {
                                  filtrar(); 
                                });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire("Error", "No se pudo realizar la solicitud. Inténtalo nuevamente.", "error");
                        console.error("Error en la solicitud AJAX:", status, error);
                    }
                });
            } else if (result.isDenied) {
                Swal.fire("No se ha eliminado el producto", "", "info");
            }
        });
    }
</script>








            </div>
            <div class="col-xl-3 col-md-12 order-1 order-md-2 mb-4">
              <div class="documentacion w-100">
              <label class="text-secondary">Documentacion</label>
         
              <div class="card rounded mt-2 p-2 w-100">

                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Activo <i class="ms-2 bi bi-circle-fill text-success"></i></label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Desactivado <i class="ms-2 bi bi-circle-fill text-secondary"></i></label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Popular  <i class="ms-2 bi bi-circle-fill text-primary"></i> </label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Oferta  <i class="ms-2 bi bi-circle-fill text-danger"></i> </label>
                <label class="w-100 m-2 border border-0 border-bottom border-light-subtle pb-2">Oferta del día  <i class="ms-2 bi bi-circle-fill text-warning"></i> </label>





              </div>
          
              </div>
            </div>
          </div>



<div class="modal fade" id="crear_nuevo_producto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar nuevo producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Producto</label>
                <input  type="text" class="rounded border border-secondary form-control bg-white p-2" id="producto" placeholder="Producto">
              </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn bg-danger   text-white" data-bs-dismiss="modal"><i class="bi bi-x-circle me-2"></i>Cerrar</a>
        <a type="button" class="btn bg-primary text-white" onclick="crear_nuevo_producto()"><i class="bi bi-plus-square me-2"></i>Agregar</a>
      </div>
    </div>
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