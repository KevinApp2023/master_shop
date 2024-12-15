<?php include("../config/conex.php"); ?>
<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include("../dist/assets/mod/head.php");?>
  <body>
    <div class="container-scroller">
    <?php include("../dist/assets/mod/navbar.php");?>
  
        <div class="main-panel">
          <div class="content-wrapper " >
          
          <div class="container">
          
          <div class="row bg-white rounded">


            <div class="col-md-6 p-4">
            <div class="text-center">
              <h3>Informacion general</h3>
              <hr>
            </div>

              <div class="mb-3">
                <label for="firstName" class="form-label">Url Principal</label>
                <input type="link" class="rounded border border-secondary form-control bg-white p-2" id="url" placeholder="example.com">
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label">Lenguaje</label>
                <select class="rounded border border-secondary form-control bg-white p-2 text-dark" id="lang" placeholder="Selecciona idioma">
    <option value="es">Español</option>
    <option value="en">Inglés</option>
    <option value="fr">Francés</option>
    <option value="de">Alemán</option>
    <option value="it">Italiano</option>
    <option value="pt">Portugués</option>
    <option value="zh">Chino</option>
    <option value="ja">Japonés</option>
    <option value="ru">Ruso</option>
    <option value="ar">Árabe</option>
    <option value="hi">Hindi</option>
    <option value="bn">Bengalí</option>
    <option value="ko">Coreano</option>
    <option value="tr">Turco</option>
    <option value="pl">Polaco</option>
    <option value="uk">Ucraniano</option>
    <option value="nl">Neerlandés</option>
    <option value="sv">Sueco</option>
    <option value="no">Noruego</option>
    <option value="da">Danés</option>
    <option value="fi">Finlandés</option>
</select>

              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label">Titulo</label>
                <input type="title" class="rounded border border-secondary form-control bg-white p-2" id="title" placeholder="Titulo">
              </div>

              
              <div class="mb-3">
                <label for="firstName" class="form-label">Keywords separados por comas (,)</label>
                <input type="title" class="rounded border border-secondary form-control bg-white p-2" id="keywords" placeholder="Keywords separados por comas (,)">
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label">Autor</label>
                <input type="text" class="rounded border border-secondary form-control bg-white p-2" id="auto" placeholder="Autor">
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label">Descripcion</label>
                <textarea  type="title" rows="5" class="rounded border border-secondary form-control bg-white p-2" id="descripcion" placeholder="Descripcion"></textarea >
              </div>

              

              <div class="mb-3">
                <label for="firstName" class="form-label">Icono Principal</label>
                <div class="row">
                  <div class="col">
                <input  type="file" class="rounded border border-secondary form-control bg-white p-2" id="icon">
                  </div>
                  <div class="col-auto">
                    <a id="ver_icono"><i class="bi bi-card-image me-2"></i> Ver icono</a>
                  </div>
                </div>
              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label">Color Principal</label>
                <select class="rounded border border-secondary form-control bg-white p-2 text-dark " id="colo_top" placeholder="Keywords separados por comas (,)" >
                  <option value="white" class="bg-white text-dark hover:bg-transparent hover:text-dark">White</option>
                  <option value="primary" class="bg-primary text-white hover:bg-transparent hover:text-white">Primary</option>
                  <option value="secondary" class="bg-secondary text-white hover:bg-transparent hover:text-white">Secondary</option>
                  <option value="success" class="bg-success text-white hover:bg-transparent hover:text-white">Success</option>
                  <option value="danger" class="bg-danger text-white hover:bg-transparent hover:text-white">Danger</option>
                  <option value="warning" class="bg-warning text-dark hover:bg-transparent hover:text-dark">Warning</option>
                  <option value="info" class="bg-info text-white hover:bg-transparent hover:text-white">Info</option>
                  <option value="light" class="bg-light text-dark hover:bg-transparent hover:text-dark">Light</option>
                  <option value="dark" class="bg-dark text-white hover:bg-transparent hover:text-white">Dark</option>
                  <option value="body" class="bg-body text-dark hover:bg-transparent hover:text-dark">Body</option>
                  <option value="link" class="bg-link text-dark hover:bg-transparent hover:text-dark">Link</option>
                  <option value="primary-subtle" class="bg-primary-subtle text-primary hover:bg-transparent hover:text-primary">Primary Subtle</option>
                  <option value="secondary-subtle" class="bg-secondary-subtle text-secondary hover:bg-transparent hover:text-secondary">Secondary Subtle</option>
                  <option value="success-subtle" class="bg-success-subtle text-success hover:bg-transparent hover:text-success">Success Subtle</option>
                  <option value="danger-subtle" class="bg-danger-subtle text-danger hover:bg-transparent hover:text-danger">Danger Subtle</option>
                  <option value="warning-subtle" class="bg-warning-subtle text-warning hover:bg-transparent hover:text-warning">Warning Subtle</option>
                  <option value="info-subtle" class="bg-info-subtle text-info hover:bg-transparent hover:text-info">Info Subtle</option>
                  <option value="light-subtle" class="bg-light-subtle text-dark hover:bg-transparent hover:text-dark">Light Subtle</option>
                  <option value="dark-subtle" class="bg-dark-subtle text-dark hover:bg-transparent hover:text-dark">Dark Subtle</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label">Texto Principal</label>
                <input  type="title" class="rounded border border-secondary form-control bg-white p-2" id="texto_top" placeholder="Texto Principal">
              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label">Logo Menu</label>
                <div class="row">
                  <div class="col">
                <input  type="file" class="rounded border border-secondary form-control bg-white p-2" id="logo_nav">
                  </div>
                  <div class="col-auto">
                    <a id="ver_logo_nav"><i class="bi bi-card-image me-2"></i> Ver Logo</a>
                  </div>
                </div>
              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label">Color Menu</label>
                <select class="rounded border border-secondary form-control bg-white  text-dark p-2" id="color_nav" placeholder="Keywords separados por comas (,)" >
                  <option value="white" class="bg-white text-dark hover:bg-transparent hover:text-dark">White</option>
                  <option value="primary" class="bg-primary text-white hover:bg-transparent hover:text-white">Primary</option>
                  <option value="secondary" class="bg-secondary text-white hover:bg-transparent hover:text-white">Secondary</option>
                  <option value="success" class="bg-success text-white hover:bg-transparent hover:text-white">Success</option>
                  <option value="danger" class="bg-danger text-white hover:bg-transparent hover:text-white">Danger</option>
                  <option value="warning" class="bg-warning text-dark hover:bg-transparent hover:text-dark">Warning</option>
                  <option value="info" class="bg-info text-white hover:bg-transparent hover:text-white">Info</option>
                  <option value="light" class="bg-light text-dark hover:bg-transparent hover:text-dark">Light</option>
                  <option value="dark" class="bg-dark text-white hover:bg-transparent hover:text-white">Dark</option>
                  <option value="body" class="bg-body text-dark hover:bg-transparent hover:text-dark">Body</option>
                  <option value="link" class="bg-link text-dark hover:bg-transparent hover:text-dark">Link</option>
                  <option value="primary-subtle" class="bg-primary-subtle text-primary hover:bg-transparent hover:text-primary">Primary Subtle</option>
                  <option value="secondary-subtle" class="bg-secondary-subtle text-secondary hover:bg-transparent hover:text-secondary">Secondary Subtle</option>
                  <option value="success-subtle" class="bg-success-subtle text-success hover:bg-transparent hover:text-success">Success Subtle</option>
                  <option value="danger-subtle" class="bg-danger-subtle text-danger hover:bg-transparent hover:text-danger">Danger Subtle</option>
                  <option value="warning-subtle" class="bg-warning-subtle text-warning hover:bg-transparent hover:text-warning">Warning Subtle</option>
                  <option value="info-subtle" class="bg-info-subtle text-info hover:bg-transparent hover:text-info">Info Subtle</option>
                  <option value="light-subtle" class="bg-light-subtle text-dark hover:bg-transparent hover:text-dark">Light Subtle</option>
                  <option value="dark-subtle" class="bg-dark-subtle text-dark hover:bg-transparent hover:text-dark">Dark Subtle</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label">Clave Publica Epayco</label>
                <input type="password" class="rounded border border-secondary form-control bg-white p-2" id="epayco_api" placeholder="Clave Publica Epayco">
              </div>
              
            </div>



            <div class="col-md-6 p-4">
            <div class="text-center">
              <h3>Redes sociales</h3>
              <hr>
            </div>
            </div>

          </div>
          </div>    
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          

          </div>
    <?php  include("../dist/assets/mod/footer.php"); ?>

          
        </div>
      </div>
    </div>
    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>