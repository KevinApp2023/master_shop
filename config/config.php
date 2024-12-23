<?php

session_start();
date_default_timezone_set('America/Bogota');



if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; 
}

if (!isset($_SESSION['pedido'])) {
    $microtime = microtime(true);  
    $milliseconds = round(($microtime - floor($microtime)) * 1000);
    $_SESSION['pedido'] = date('Y') .'A'. date('m') .'E'. date('d') .'R'. date('H') .'S'. date('i') .'F'. date('s') .'A'. str_pad($milliseconds, 3, '0', STR_PAD_LEFT); 
}

$consult = "SELECT * FROM config WHERE name IN ('color_nav', 'url', 'title', 'keywords', 'author', 'description', 'icon', 'logo_nav', 'epayco_api', 'lang', 'color_top', 'facebook', 'youtube', 'instagram', 'linkedin', 'x', 'github', 'telegram', 'whatsapp', 'gmail', 'skype', 'texto_top', 'pinterest', 'tiktok', 'snapchat', 'vero', 'etsy', 'reddit', 'flickr', 'NIT')";
$resultado = $conex->query($consult);

if ($resultado->num_rows > 0) {
    while ($data = $resultado->fetch_assoc()) {
        switch ($data['name']) {
            case 'color_nav':
                $navClass = $data['data'];
                break;
            case 'url':
                $url = $data['data'];
                break;
            case 'title':
                $title = $data['data'];
                break;
            case 'keywords':
                $keywords = $data['data'];
                break;
            case 'author':
                $author = $data['data'];
                break;
            case 'description':
                $description = $data['data'];
                break;
            case 'icon':
                $icon = $data['data'];
                break;
            case 'logo_nav':
                $logoNav = $data['data'];
                break;
            case 'lang':
                $lang = $data['data'];
                break;
            case 'color_top':
                $color_top = $data['data'];
                break;

            case 'texto_top':
                $texto_top = $data['data'];
                break;

                
            case 'epayco_api':
                $epayco_api = $data['data'];
                break;


            case 'facebook':
                $facebook = $data['data'];
                break;

            case 'instagram':
                $instagram = $data['data'];
                break;

            case 'linkedin':
                $linkedin = $data['data'];
                break;

            case 'x':  
                $x = $data['data'];
                break;

            case 'github':
                $github = $data['data'];
                break;

            case 'telegram':
                $telegram = $data['data'];
                break;

            case 'whatsapp':
                $whatsapp = $data['data'];
                break;

            case 'gmail':
                $gmail = $data['data'];
                break;

            case 'skype':
                $skype = $data['data'];
                break;

            case 'pinterest':
                $pinterest = $data['data'];
                break;

            case 'youtube':
                $youtube = $data['data'];
                break;

            case 'tiktok':
                $tiktok = $data['data'];
                break;

            case 'snapchat':
                $snapchat = $data['data'];
                break;

            case 'vero':
                $vero = $data['data'];
                break;

            case 'etsy':
                $etsy = $data['data'];
                break;

            case 'reddit':
                $reddit = $data['data'];
                break;
            
                
            case 'flickr':
                $flickr = $data['data'];
                break;
                
            case 'NIT':
                $NIT = $data['data'];
                break;
  
        
        }
    }
}



if (!empty($navClass)) {
    $colorClasses = [
        'primary' => ['bg-primary', 'text-white', 'btn-outline-white'],
        'primary-subtle' => ['bg-primary-subtle', 'text-primary-emphasis', 'btn-outline-primary-emphasis'],
        'secondary' => ['bg-secondary', 'text-white', 'btn-outline-white'],
        'secondary-subtle' => ['bg-secondary-subtle', 'text-secondary-emphasis', 'btn-outline-secondary-emphasis'],
        'success' => ['bg-success', 'text-white', 'btn-outline-white'],
        'success-subtle' => ['bg-success-subtle', 'text-success-emphasis', 'btn-outline-success-emphasis'],
        'danger' => ['bg-danger', 'text-white', 'btn-outline-white'],
        'danger-subtle' => ['bg-danger-subtle', 'text-danger-emphasis', 'btn-outline-danger-emphasis'],
        'warning' => ['bg-warning', 'text-dark', 'btn-outline-dark'],
        'warning-subtle' => ['bg-warning-subtle', 'text-warning-emphasis', 'btn-outline-warning-emphasis'],
        'info' => ['bg-info', 'text-dark', 'btn-outline-dark'],
        'info-subtle' => ['bg-info-subtle', 'text-info-emphasis', 'btn-outline-info-emphasis'],
        'light' => ['bg-light', 'text-dark', 'btn-outline-dark'],
        'light-subtle' => ['bg-light-subtle', 'text-light-emphasis', 'btn-outline-light-emphasis'],
        'dark' => ['bg-dark', 'text-white', 'btn-outline-white'],
        'dark-subtle' => ['bg-dark-subtle', 'text-dark-emphasis', 'btn-outline-dark-emphasis'],
        'body-secondary' => ['bg-body-secondary', 'text-body-emphasis', 'btn-outline-body-emphasis'],
        'body-tertiary' => ['bg-body-tertiary', 'text-body-emphasis', 'btn-outline-body-emphasis'],
        'body' => ['bg-body', 'text-body', 'btn-outline-body'],
        'black' => ['bg-black', 'text-white', 'btn-outline-white'],
        'white' => ['bg-white', 'text-dark', 'btn-outline-dark'],
        'transparent' => ['bg-transparent', 'text-body', 'btn-outline-body']
    ];

    if (isset($colorClasses[$navClass])) {
        $bgClass = $colorClasses[$navClass][0];
        $textClass = $colorClasses[$navClass][1];
        $btnClass = $colorClasses[$navClass][2];
    }
}




if (!empty($color_top)) {
    $color_topClasses = [
        'primary' => ['bg-primary', 'text-white', 'btn-outline-white'],
        'primary-subtle' => ['bg-primary-subtle', 'text-primary-emphasis', 'btn-outline-primary-emphasis'],
        'secondary' => ['bg-secondary', 'text-white', 'btn-outline-white'],
        'secondary-subtle' => ['bg-secondary-subtle', 'text-secondary-emphasis', 'btn-outline-secondary-emphasis'],
        'success' => ['bg-success', 'text-white', 'btn-outline-white'],
        'success-subtle' => ['bg-success-subtle', 'text-success-emphasis', 'btn-outline-success-emphasis'],
        'danger' => ['bg-danger', 'text-white', 'btn-outline-white'],
        'danger-subtle' => ['bg-danger-subtle', 'text-danger-emphasis', 'btn-outline-danger-emphasis'],
        'warning' => ['bg-warning', 'text-dark', 'btn-outline-dark'],
        'warning-subtle' => ['bg-warning-subtle', 'text-warning-emphasis', 'btn-outline-warning-emphasis'],
        'info' => ['bg-info', 'text-dark', 'btn-outline-dark'],
        'info-subtle' => ['bg-info-subtle', 'text-info-emphasis', 'btn-outline-info-emphasis'],
        'light' => ['bg-light', 'text-dark', 'btn-outline-dark'],
        'light-subtle' => ['bg-light-subtle', 'text-light-emphasis', 'btn-outline-light-emphasis'],
        'dark' => ['bg-dark', 'text-white', 'btn-outline-white'],
        'dark-subtle' => ['bg-dark-subtle', 'text-dark-emphasis', 'btn-outline-dark-emphasis'],
        'body-secondary' => ['bg-body-secondary', 'text-body-emphasis', 'btn-outline-body-emphasis'],
        'body-tertiary' => ['bg-body-tertiary', 'text-body-emphasis', 'btn-outline-body-emphasis'],
        'body' => ['bg-body', 'text-body', 'btn-outline-body'],
        'black' => ['bg-black', 'text-white', 'btn-outline-white'],
        'white' => ['bg-white', 'text-dark', 'btn-outline-dark'],
        'transparent' => ['bg-transparent', 'text-body', 'btn-outline-body']
    ];

    if (isset($color_topClasses[$color_top])) {
        $TopbgClass = $color_topClasses[$color_top][0];
        $ToptextClass = $color_topClasses[$color_top][1];
        $TopbtnClass = $color_topClasses[$color_top][2];
    }
}








$category = "";
$consult_category = "SELECT * FROM category";
$resultado_category = $conex->query($consult_category);
if ($resultado_category->num_rows > 0) {
    while ($data_category = $resultado_category->fetch_assoc()) {
        $url_categoria = preg_replace('/[ ,.]/', '_', $data_category['name']);
        if(isset($_GET['category'])){
            $active_categoria = ($url_categoria == $_GET['category']) ? trim($TopbgClass . ' ' . $ToptextClass) : '';
        if(empty($_GET['_'])){ $consulta_data_categoria = 'all'; }else{ $consulta_data_categoria = preg_replace('/[ ,.]/', '+', $_GET['_']); }
        $category .= '<li><a class="dropdown-item btn ' . $active_categoria . ' " href="/category/' . preg_replace('/[ ,.]/', '_', $data_category['name']) . '/all">' . $data_category['name'] . '</a></li>' . "\n";
            
        }else{
        $category .= '<li><a class="dropdown-item btn  " href="/category/' . preg_replace('/[ ,.]/', '_', $data_category['name']) . '/all">' . $data_category['name'] . '</a></li>' . "\n";
            
        }
      
    }
}



if(isset($_GET['category'])){

$category_banner = "";

$consult_category_banner = "SELECT * FROM category";
$resultado_category_banner = $conex->query($consult_category_banner);

if ($resultado_category_banner->num_rows > 0) {
    while ($data_category_banner = $resultado_category_banner->fetch_assoc()) {
        $url_categoria = preg_replace('/[ ,.]/', '_', $data_category_banner['name']);
        $active_categoria = ($url_categoria == $_GET['category']) ? trim($TopbgClass . ' ' . $ToptextClass) : '';
        $active_a_categoria = ($url_categoria == $_GET['category']) ? trim($ToptextClass) : 'text-black';
        if(empty($_GET['_'])){ $consulta_data_categoria = 'all'; }else{ $consulta_data_categoria = preg_replace('/[ ,.]/', '+', $_GET['_']); }


        $category_banner .= '<li class="list-group-item ' . $active_categoria . ' " ><a class=" ' . $active_a_categoria . ' " href="/category/' . $url_categoria . '/all">' . $data_category_banner['name'] . '</a></li>' . "\n";
    }
}

}


switch ($lang) {
    case 'es':
        $idioma = 'Español';
        break;
    case 'en':
        $idioma = 'Inglés';
        break;
    case 'fr':
        $idioma = 'Francés';
        break;
    case 'de':
        $idioma = 'Alemán';
        break;
    case 'it':
        $idioma = 'Italiano';
        break;
    case 'pt':
        $idioma = 'Portugués';
        break;
    case 'zh':
        $idioma = 'Chino';
        break;
    case 'ja':
        $idioma = 'Japonés';
        break;
    case 'ru':
        $idioma = 'Ruso';
        break;
    case 'ar':
        $idioma = 'Árabe';
        break;
    case 'hi':
        $idioma = 'Hindi';
        break;
    case 'bn':
        $idioma = 'Bengalí';
        break;
    case 'ko':
        $idioma = 'Coreano';
        break;
    case 'tr':
        $idioma = 'Turco';
        break;
    case 'pl':
        $idioma = 'Polaco';
        break;
    case 'uk':
        $idioma = 'Ucraniano';
        break;
    case 'nl':
        $idioma = 'Neerlandés';
        break;
    case 'sv':
        $idioma = 'Sueco';
        break;
    case 'no':
        $idioma = 'Noruego';
        break;
    case 'da':
        $idioma = 'Danés';
        break;
    case 'fi':
        $idioma = 'Finlandés';
        break;
    default:
        $idioma = 'Idioma no disponible';
        break;
}



