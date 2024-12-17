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
                <label for="firstName" class="form-label text-secondary">Url Principal</label>
                <input value="<?= $url ?>"  type="link" class="rounded border border-secondary form-control bg-white p-2" id="url" placeholder="example.com">
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Lenguaje</label>
                <select class="rounded border border-secondary form-control bg-white p-2 text-dark" id="lang" placeholder="Selecciona idioma">
    <option value="<?= $lang ?>" class="bg-secondary text-white"><?= $idioma ?></option>
    <option value="es" class="text-danger">Los lenguajes mas pupulares</option>
    <hr>
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
                <label for="firstName" class="form-label text-secondary">Titulo</label>
                <input type="title" value="<?= $title ?>"class="rounded border border-secondary form-control bg-white p-2" id="title" placeholder="Titulo">
              </div>

              
              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Keywords separados por comas (,)</label>
                <textarea rows="10" type="title" class="rounded border border-secondary form-control bg-white p-2" id="keywords" placeholder="Keywords separados por comas (,)"><?= $keywords ?></textarea>
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Autor</label>
                <input value="<?= $author ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="author" placeholder="Autor">
              </div>

              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Descripcion</label>
                <textarea  type="title" rows="10" class="rounded border border-secondary form-control bg-white p-2" id="descripcion" placeholder="Descripcion"><?= $description ?></textarea >
              </div>

              

              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Icono Principal</label>
                <div class="row">
                  <div class="col">
                <input  type="file" class="rounded border border-secondary form-control bg-white p-2" id="icon">
                  </div>
                  <div class="col-auto">
                    <a onclick="ver_icono('<?php echo $icon; ?>')" ><i class="bi bi-card-image me-2"></i> Ver icono</a>
                  </div>
                </div>
              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Color Principal</label>
                <select class="rounded border border-secondary form-control bg-white p-2 text-dark hover:bg-transparent hover:text-dark " id="color_top" placeholder="Keywords separados por comas (,)" >
                 <option value="<?= $color_top ?>" class="<?= $TopbgClass ?> <?= $ToptextClass ?>"><?= $color_top ?></option>
                <option class="text-danger ">Todos los colores disponibles</option>
                <hr>
                <option value="white" class="bg-white text-dark hover:bg-transparent hover:text-dark">White </option>
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
                <label for="firstName" class="form-label text-secondary">Texto Principal</label>
                <input value="<?= $texto_top ?>" type="title" class="rounded border border-secondary form-control bg-white p-2" id="texto_top" placeholder="Texto Principal">
              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Logo Menu</label>
                <div class="row">
                  <div class="col">
                <input  type="file" class="rounded border border-secondary form-control bg-white p-2" id="logo_nav">
                  </div>
                  <div class="col-auto">
                    <a onclick="ver_logo_nav('<?= $logoNav?>')" ><i class="bi bi-card-image me-2"></i> Ver Logo</a>
                  </div>
                </div>
              </div>


              <div class="mb-3">
                <label for="firstName" class="form-label text-secondary">Color Menu</label>
                <select class="rounded border border-secondary form-control bg-white  text-dark p-2" id="color_nav" placeholder="Keywords separados por comas (,)" >
                <option value="<?= $navClass ?>" class="<?= $bgClass ?> <?= $textClass ?>"><?= $navClass ?></option>
                <option class="text-danger ">Todos los colores disponibles</option>
                <hr>
                
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
                <label for="firstName" class="form-label text-secondary">Clave Publica Epayco</label>
                <input  value="<?= $epayco_api ?>" type="password" class="rounded border border-secondary form-control bg-white p-2" id="epayco_api" placeholder="Clave Publica Epayco">
              </div>
              
             
           
           
            </div>



            <div class="col-md-6 p-4">
            <div class="text-center">
              <h3>Redes sociales</h3>
              <hr>
            </div>

            <div class="mb-3">
    <label for="facebook" class="form-label text-secondary">Facebook</label>
    <input value="<?= $facebook ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="facebook" name="facebook" placeholder="https://www.facebook.com/">
</div>

<div class="mb-3">
    <label for="youtube" class="form-label text-secondary">YouTube</label>
    <input value="<?= $youtube ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="youtube" name="youtube" placeholder="https://www.youtube.com/">
</div>

<div class="mb-3">
    <label for="instagram" class="form-label text-secondary">Instagram</label>
    <input value="<?= $instagram ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="instagram" name="instagram" placeholder="https://www.instagram.com/">
</div>

<div class="mb-3">
    <label for="linkedin" class="form-label text-secondary">LinkedIn</label>
    <input value="<?= $linkedin ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/">
</div>

<div class="mb-3">
    <label for="x" class="form-label text-secondary">X (anteriormente Twitter)</label>
    <input  value="<?= $x ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="x" name="x" placeholder="https://www.x.com/">
</div>

<div class="mb-3">
    <label for="github" class="form-label text-secondary">GitHub</label>
    <input value="<?= $github ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="github" name="github" placeholder="https://www.github.com/">
</div>

<div class="mb-3">
    <label for="telegram" class="form-label text-secondary">Telegram</label>
    <input value="<?= $telegram ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="telegram" name="telegram" placeholder="https://www.telegram.me/">
</div>

<div class="mb-3">
    <label for="whatsapp" class="form-label text-secondary">WhatsApp</label>
    <input value="<?= $whatsapp ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="whatsapp" name="whatsapp" placeholder="57312####">
</div>

<div class="mb-3">
    <label for="gmail" class="form-label text-secondary">Gmail</label>
    <input value="<?= $gmail ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="gmail" name="gmail" placeholder="example@gmail.com">
</div>

<div class="mb-3">
    <label for="skype" class="form-label text-secondary">Skype</label>
    <input value="<?= $skype ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="skype" name="skype" placeholder="example?call">
</div>

<div class="mb-3">
    <label for="pinterest" class="form-label text-secondary">Pinterest</label>
    <input value="<?= $pinterest ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="pinterest" name="pinterest" placeholder="https://www.pinterest.com/">
</div>

<div class="mb-3">
    <label for="tiktok" class="form-label text-secondary">TikTok</label>
    <input value="<?= $tiktok ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="tiktok" name="tiktok" placeholder="https://www.tiktok.com/">
</div>

<div class="mb-3">
    <label for="snapchat" class="form-label text-secondary">Snapchat</label>
    <input value="<?= $snapchat ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="snapchat" name="snapchat" placeholder="https://www.snapchat.com/">
</div>

<div class="mb-3">
    <label for="vero" class="form-label text-secondary">Vero</label>
    <input value="<?= $vero ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="vero" name="vero" placeholder="https://www.vero.co/">
</div>

<div class="mb-3">
    <label for="etsy" class="form-label text-secondary">Etsy</label>
    <input value="<?= $etsy ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="etsy" name="etsy" placeholder="https://www.etsy.com/">
</div>

<div class="mb-3">
    <label for="reddit" class="form-label text-secondary">Reddit</label>
    <input value="<?= $reddit ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="reddit" name="reddit" placeholder="https://www.reddit.com/">
</div>

<div class="mb-3">
    <label for="flickr" class="form-label text-secondary">Flickr</label>
    <input value="<?= $flickr ?>" type="text" class="rounded border border-secondary form-control bg-white p-2" id="flickr" name="flickr" placeholder="https://www.flickr.com/">
</div>



       
          </div>
     
          <div class=" w-100 p-4 pt-0"><a onclick="guardar_cambios()" class="btn text-white bg-success w-100"><i class="bi bi-floppy me-3"></i>Guardar Cambios</a></div>
    
          </div>    
          

     



          </div>
    <?php  include("../dist/assets/mod/footer.php"); ?>

          
        </div>
      </div>
    </div>



  
 
    <script>
    function ver_icono(icon){
      Swal.fire({
        text: "Icono principal.",
        imageUrl: icon,
        imageWidth: 200,
        // Si quieres que la altura sea automática, simplemente elimina la propiedad imageHeight
        imageAlt: "Custom image"
      });
    }
</script>

<script>
    function ver_logo_nav(logoNav){
      Swal.fire({
        text: "Logo Menu.",
        imageUrl: logoNav,
        imageWidth: 200,
        // Igualmente, elimina la propiedad imageHeight o asigna un valor numérico si deseas un tamaño específico
        imageAlt: "Custom image"
      });
    }
</script>



<script>
    function guardar_cambios() {
        Swal.fire({
            title: "¿Quieres guardar los cambios?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Guardar",
            denyButtonText: `No guardar`,
            icon: 'question',
        }).then((result) => {
            if (result.isConfirmed) {
                var form_data = new FormData();

                form_data.append('url', $('#url').val());
                form_data.append('lang', $('#lang').val());
                form_data.append('title', $('#title').val());
                form_data.append('keywords', $('#keywords').val());
                form_data.append('author', $('#author').val());
                form_data.append('descripcion', $('#descripcion').val());
                form_data.append('icon', $('#icon')[0].files[0]);
                form_data.append('color_top', $('#color_top').val());
                form_data.append('texto_top', $('#texto_top').val());
                form_data.append('logo_nav', $('#logo_nav')[0].files[0]);
                form_data.append('color_nav', $('#color_nav').val());
                form_data.append('epayco_api', $('#epayco_api').val());
                form_data.append('facebook', $('#facebook').val());
                form_data.append('youtube', $('#youtube').val());
                form_data.append('instagram', $('#instagram').val());
                form_data.append('linkedin', $('#linkedin').val());
                form_data.append('x', $('#x').val());
                form_data.append('github', $('#github').val());
                form_data.append('telegram', $('#telegram').val());
                form_data.append('whatsapp', $('#whatsapp').val());
                form_data.append('gmail', $('#gmail').val());
                form_data.append('skype', $('#skype').val());
                form_data.append('pinterest', $('#pinterest').val());
                form_data.append('tiktok', $('#tiktok').val());
                form_data.append('snapchat', $('#snapchat').val());
                form_data.append('vero', $('#vero').val());
                form_data.append('etsy', $('#etsy').val());
                form_data.append('reddit', $('#reddit').val());
                form_data.append('flickr', $('#flickr').val());

                $.ajax({
                    type: "POST",
                    url: "/dist/assets/etc/guardar_cambios_configuracion.php",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                      window.location.reload();
                        
                    }
                });
            } else if (result.isDenied) {
                Swal.fire("Los cambios no se guardan", "", "info");
            }
        });
    }
</script>

    
    <?php  include("../dist/assets/mod/mod_js.php"); ?>
  </body>
</html>