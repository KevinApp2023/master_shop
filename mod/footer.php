<div class="footer  m-0 <?= $bgClass . " " . $textClass ?>">
<div class="container mt-5 p-2  <?= $bgClass . " " . $textClass ?>">
  <footer class="pt-5  ">
    <div class="row">
      <div class="col-6 col-md-4 mb-3 p-4 ">
      <img src="<?php echo $logoNav; ?>" class="img-fluid mb-3 ">

        <p class="justify">


        <?php echo $description; ?>
        </p>
      </div>

      <div class="col-6 col-md mb-3 p-4">
        <ul class="nav flex-column">
        <li class="nav-item "><a href="#" class="nav-link p-0 m-0  <?= $bgClass . " " . $textClass ?>">Inicio</a></li>
          <hr class="mt-2">
          <li class="nav-item "><a href="#" class="nav-link p-0 m-0  <?= $bgClass . " " . $textClass ?>">Categorias</a></li>
          <hr class="mt-2">
          <li class="nav-item "><a href="#" class="nav-link p-0 m-0  <?= $bgClass . " " . $textClass ?>">Precios</a></li>
          <hr class="mt-2">
          <li class="nav-item "><a href="#" class="nav-link p-0 m-0  <?= $bgClass . " " . $textClass ?>">Ofertas</a></li>
          <hr class="mt-2">
          <li class="nav-item "><a href="#" class="nav-link p-0 m-0  <?= $bgClass . " " . $textClass ?>">Contacto</a></li>
          <hr class="mt-2">
        </ul>
      </div>

      

      <div class="col-md  mb-3 p-4">
        <form>
          <h5>Suscríbete a nuestra newsletter</h5>
          <p>Resumen mensual de nuestras novedades y novedades más interesantes.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Direccion de correo electronico</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Direccion de correo electronico">
            <button class=" btn  <?= $btnClass ?>" type="button">Suscribir</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between  border-top py-3">
      <p>© <?php echo date('Y') . " " .  $title; ?>. Todos los derechos reservados.</p>
    </div>
  </footer>
</div>
</div>
