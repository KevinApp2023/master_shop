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
            <div class="col-auto">
              <a  data-bs-toggle="modal" data-bs-target="#crear_nueva_categoria" class="btn btn-dark  mt-2 p-3"><i class="bi bi-plus-square me-2"></i>Nueva categoria</a>
            </div>
           </div>
            
              </div>

              <div class="hscroll mt-2 mb-2">



<table class="table table-bordered  rounded" id="tabla_datos">
                        
                                <thead>
                                    <tr>
      <th class=" p-2 "></th>
      <th class=" p-2 w-100">Lista de categorias</th>
      <th class=" p-2 w-auto">Acciones</th>

    
                                        
                                    </tr>
                                </thead>
                                <tbody id="resultadoBusqueda">
    

                              
                                </tbody>
                            </table>
                            </div>


<script>
function crear_nueva_categoria() {
    $.ajax({
        url: "/dist/assets/etc/crear_nueva_categoria.php",
        method: 'POST',
        data: { 
          categoria: document.getElementById('categoria').value,
        },
        success: function(response) {
          filtrar();
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    }); 
}
</script>





               



<script>
document.addEventListener('DOMContentLoaded', (event) => {
    filtrar();

    document.getElementById('buscar_categoria').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            filtrar();
        }
    });
});

function filtrar() {
    $.ajax({
        url: "/dist/assets/etc/buscar_categoria.php",
        method: 'POST',
        data: { 
            buscar_categoria: document.getElementById('buscar_categoria').value,
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
                    url: "/dist/assets/etc/eliminar_categoria.php",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                     
                            Swal.fire("¡Eliminado!", "La categoria se ha eliminado correctamente", "success")
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
                Swal.fire("No se ha eliminado la categoria", "", "info");
            }
        });
    }
</script>


            </div>
          </div>



<div class="modal fade" id="crear_nueva_categoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar nueva categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Categoria</label>
                <input  type="text" class="rounded border border-secondary form-control bg-white p-2" id="categoria" placeholder="Categoria">
              </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn bg-danger   text-white" data-bs-dismiss="modal"><i class="bi bi-x-circle me-2"></i>Cerrar</a>
        <a type="button" class="btn bg-primary text-white" data-bs-dismiss="modal" onclick="crear_nueva_categoria()"><i class="bi bi-plus-square me-2"></i>Agregar</a>
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