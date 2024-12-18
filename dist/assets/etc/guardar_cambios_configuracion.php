<?php 
include("../../../config/conex.php"); 

// Verifica que la petición sea un POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura los valores del formulario, incluso si están vacíos
    $url = isset($_POST['url']) ? $_POST['url'] : '';
    $lang = isset($_POST['lang']) ? $_POST['lang'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $keywords = isset($_POST['keywords']) ? $_POST['keywords'] : '';
    $author = isset($_POST['author']) ? $_POST['author'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $icon = isset($_FILES['icon']) ? $_FILES['icon'] : null;
    $color_top = isset($_POST['color_top']) ? $_POST['color_top'] : '';
    $texto_top = isset($_POST['texto_top']) ? $_POST['texto_top'] : '';
    $logo_nav = isset($_FILES['logo_nav']) ? $_FILES['logo_nav'] : null;
    $color_nav = isset($_POST['color_nav']) ? $_POST['color_nav'] : '';
    $epayco_api = isset($_POST['epayco_api']) ? $_POST['epayco_api'] : '';
    $facebook = isset($_POST['facebook']) ? $_POST['facebook'] : '';
    $youtube = isset($_POST['youtube']) ? $_POST['youtube'] : '';
    $instagram = isset($_POST['instagram']) ? $_POST['instagram'] : '';
    $linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : '';
    $x = isset($_POST['x']) ? $_POST['x'] : '';
    $github = isset($_POST['github']) ? $_POST['github'] : '';
    $telegram = isset($_POST['telegram']) ? $_POST['telegram'] : '';
    $whatsapp = isset($_POST['whatsapp']) ? $_POST['whatsapp'] : '';
    $gmail = isset($_POST['gmail']) ? $_POST['gmail'] : '';
    $skype = isset($_POST['skype']) ? $_POST['skype'] : '';
    $pinterest = isset($_POST['pinterest']) ? $_POST['pinterest'] : '';
    $tiktok = isset($_POST['tiktok']) ? $_POST['tiktok'] : '';
    $snapchat = isset($_POST['snapchat']) ? $_POST['snapchat'] : '';
    $vero = isset($_POST['vero']) ? $_POST['vero'] : '';
    $etsy = isset($_POST['etsy']) ? $_POST['etsy'] : '';
    $reddit = isset($_POST['reddit']) ? $_POST['reddit'] : '';
    $flickr = isset($_POST['flickr']) ? $_POST['flickr'] : '';

    // Array para asociar los nombres de los campos con los valores
    $config_values = [
        'url' => $url,
        'lang' => $lang,
        'title' => $title,
        'keywords' => $keywords,
        'author' => $author,
        'descripcion' => $descripcion,
        'color_top' => $color_top,
        'texto_top' => $texto_top,
        'color_nav' => $color_nav,
        'epayco_api' => $epayco_api,
        'facebook' => $facebook,
        'youtube' => $youtube,
        'instagram' => $instagram,
        'linkedin' => $linkedin,
        'x' => $x,
        'github' => $github,
        'telegram' => $telegram,
        'whatsapp' => $whatsapp,
        'gmail' => $gmail,
        'skype' => $skype,
        'pinterest' => $pinterest,
        'tiktok' => $tiktok,
        'snapchat' => $snapchat,
        'vero' => $vero,
        'etsy' => $etsy,
        'reddit' => $reddit,
        'flickr' => $flickr
    ];

    // Si se sube un archivo (icono o logo de navegación), procesarlo
    if ($icon && $icon['error'] === 0) {
        $icon_path = '/img/' . basename($icon['name']);
        $icon_path_s = '../../../img/' . basename($icon['name']);
        move_uploaded_file($icon['tmp_name'], $icon_path_s);
        $config_values['icon'] = $icon_path;  // Guardamos la ruta del archivo subido
    }

    if ($logo_nav && $logo_nav['error'] === 0) {
        $logo_nav_path = '/img/' . basename($logo_nav['name']);
        $logo_nav_path_s = '../../../img/' . basename($logo_nav['name']);
        move_uploaded_file($logo_nav['tmp_name'], $logo_nav_path_s);
        $config_values['logo_nav'] = $logo_nav_path;  // Guardamos la ruta del archivo subido
    }

    // Preparar y ejecutar las consultas SQL para actualizar cada campo
    foreach ($config_values as $name => $data) {
        // No es necesario verificar si el campo está vacío ya que ahora todos se actualizan
        $stmt = $conex->prepare("UPDATE config SET data = ? WHERE name = ?");
        $stmt->bind_param("ss", $data, $name);  // Vincula los valores a la consulta
        if (!$stmt->execute()) {
            // Puedes manejar el error aquí, si es necesario
        }
        $stmt->close();
    }
}
?> 
