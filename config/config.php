<?php

$consult = "SELECT * FROM config WHERE name IN ('color_nav', 'url', 'title', 'keywords', 'author', 'description', 'icon', 'logo_nav', 'lang', 'color_top', 'facebook', 'youtube', 'instagram', 'linkedin', 'x', 'github', 'telegram', 'whatsapp', 'gmail', 'skype','texto_top')";
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
            case 'facebook':
                $facebook = $data['data'];
                break;
            case 'youtube':
                $youtube = $data['data'];
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
                $githud = $data['data'];
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
            case 'texto_top':
                $texto_top = $data['data'];
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



$category = "";

$consult_category = "SELECT * FROM category";
$resultado_category = $conex->query($consult_category);

if ($resultado_category->num_rows > 0) {
    while ($data_category = $resultado_category->fetch_assoc()) {
        $category .= '<li><a class="dropdown-item" href="/' . $data_category['name'] . '">' . $data_category['name'] . '</a></li>' . "\n";
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