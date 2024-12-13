

        <header class="pt-3 pb-3 <?= $bgClass . " " . $textClass ?> w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg  <?= $bgClass . " " . $textClass ?>">
                    <div class="container-fluid  ">
                        <div class="row  w-100 "  style="margin-left: auto ; margin-right: auto;">

                            <div class="col-auto col-md-auto order-1   text-center d-flex align-items-stretch " style="margin-left: auto ; margin-right: auto;" >
                            <img src="<?php echo $logoNav; ?>" class="img-fluid "  style="  padding:2px; height: 50px; width: auto;">
                            </div>

                            


                            <div   class=" p-0 col order-2 d-flex align-items-stretch w-100 ">
                                <input id="buscar_producto" type="search" class="form-control " placeholder="Buscar..." aria-label="Search" name="_" style="min-width:100px;">
                            </div>
                            
                               <div class="col-auto order-3 d-flex align-items-stretch  m-0 ">
                                <button type="button" class="btn btn-light " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>


                                <div class="col-auto order-4   d-flex align-items-stretch  p-0  ">

                            <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            </div>



                            <div class="col-md order-4  p-0 navbar-collapse collapse mt-3 " id="navbarsExample09">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link <?= $textClass ?>" href="<?php echo $url; ?>">Inicio</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle <?= $textClass ?>" href="" data-bs-toggle="dropdown" aria-expanded="false">Categorías</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item btn  <?php if(isset($_GET['category'])){if(empty($_GET['category'])){ echo $TopbgClass . " " . $ToptextClass; } }?>" href="/all">Todas las categorias</a></li>
                                           <?php echo $category; ?>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?= $textClass ?>" href="">Ofertas & Promociones</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?= $textClass ?>" href="">Contacto</a>
                                    </li>
                                </ul>
                                <div class="row m-0 ">
                                   <?php
                                   if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                                    if ($_SESSION['priv'] == 1){ ?>
                                        <a href="/admin/panel"class="col btn <?= $btnClass ?>  w-100 m-2 mt-2 mb-0">Administrador</a>
                                    <?php }
                                    if ($_SESSION['priv'] == 2){ ?>
                                        <a href="/mi/perfil"class="col btn <?= $btnClass ?>  w-100 m-2 mt-2 mb-0">Mi Perfil</a>
                                   <?php }
                                }else{ ?>
                                    <a data-bs-toggle="modal" data-bs-target="#login" class="col btn <?= $btnClass ?> w-100 m-2 mt-2 mb-0">Acceso</a>
                                    <a href="/etc/register"class="col btn <?= $btnClass ?>  w-100 m-2 mt-2 mb-0">Registrar</a>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </header>


        
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compras</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
<div id="data_cart">

</div>







<?php
if(empty($_GET['category'])){ ?>
<script>
        document.getElementById('buscar_producto').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                let query = event.target.value;
                query = query.replace(/\s+/g, '+') 
                        .replace(/[.,]/g, '');
                const url = `/${query}`;
                window.location.href = url;
                $('#buscar_producto').val() = '';
            }
        });
</script>
<?php }else { ?>

    <script>
        document.getElementById('buscar_producto').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                let query = event.target.value;
                query = query.replace(/\s+/g, '+') 
                        .replace(/[.,]/g, '');
                const url = `/category/<?php echo $_GET['category'];?>/${query}`;
                window.location.href = url;
                $('#buscar_producto').val() = '';
            }
        });
</script>


<?php } ?>



<script>
    $(document).ready(function() {  
        actualizarCarrito();
    });

   function actualizarCarrito() {  
            $.ajax({
                url: '/c/cart/products', 
                method: 'GET',
                success: function(response) {
                    $('#data_cart').html(response);
                },
                error: function() {
                    alert('Hubo un error al actualizar el carrito.');
                }
            });
    };
</script> 
  </div>
</div>





<div class="modal fade " id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Acceso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="liveAlertPlaceholder" class="row flex-column-reverse"></div>
      <div class="form_login ">
            <div >
              <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
              <input type="email" class="form-control" id="user" placeholder="usuario@mail.com">
            </div>
            <div class="mt-4">
                <label for="inputPassword5" class="form-label">Contraseña</label>
                <input type="password" id="pass" class="form-control" placeholder="Contraseña" aria-describedby="passwordHelpBlock">
            </div>
            <div class="mt-4 ">
                <div id="acceso" class="btn <?= $TopbgClass ?> <?= $ToptextClass ?> w-100">Iniciar Acceso</div>
                
            </div>
            <div class="hoc text-center mt-2">
            <a class="text-center">¿Has olvidado la contraseña?</a>
            </div>
            <hr>
            <div class="mt-4 mb-2">
                <div class="btn <?= $btnClass ?> w-100">Registrar</div>
            </div>
        </div>




      </div>
    </div>
  </div>
</div>




<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible col-md-12" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}




</script>




<script>
$(document).ready(function() {
  $('#acceso').click(function(e) {
    e.preventDefault(); 

    var user = $('#user').val();
    var pass = $('#pass').val();

    var datos_acceso = {
        user: user,
        pass: pass
    };

    $.ajax({
      url: '/mi/acceso',  
      method: 'POST',    
      data: datos_acceso,     
      success: function(response) {
        if (response == 'Error 101'){
            appendAlert('El usuario no existe, Intente nuevamente con un usuario diferente!', '<?= $color_top ?>')
        }else if (response == 'Error 102'){
            appendAlert('Contraseña incorrecta, Intente nuevamente con una nueva contraseña!', '<?= $color_top ?>')
        }else if (response == 'Active'){
            location.reload();
        }
      },
      error: function(xhr, status, error) {
        alert("Error: " + error);
      }
    });
  });
});
</script>
