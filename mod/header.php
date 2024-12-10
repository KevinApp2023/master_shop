

        <header class="pt-3 pb-3 <?= $bgClass . " " . $textClass ?> w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg  <?= $bgClass . " " . $textClass ?>">
                    <div class="container-fluid  ">
                        <div class="row  w-100 "  style="margin-left: auto ; margin-right: auto;">

                            <div class="col-auto col-md-auto order-1   text-center d-flex align-items-stretch " style="margin-left: auto ; margin-right: auto;" >
                            <img src="<?php echo $logoNav; ?>" class="img-fluid "  style="  padding:2px; height: 50px; width: auto;">
                            </div>

                            


                            <form  role="search" method="get"  class=" p-0 col order-2 d-flex align-items-stretch w-100 ">
                                <input type="search" class="form-control " placeholder="Buscar..." aria-label="Search" name="_" style="min-width:100px;">
                            </form>
                            
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
                                    <a class="col btn <?= $btnClass ?> w-100 m-2 mt-2 mb-0">Login</a>
                                    <a class="col btn <?= $btnClass ?>  w-100 m-2 mt-2 mb-0">Registrar</a>
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














<script>
    $(document).ready(function() {  
            $.ajax({
                url: '/cart',
                method: 'GET',
                success: function(response) {
                    $('#data_cart').html(response);
                },
                error: function() {
                    alert('Hubo un error al actualizar el carrito.');
                }
            });
    });
</script> 
  </div>
</div>


