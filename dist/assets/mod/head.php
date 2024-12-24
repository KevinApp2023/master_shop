<?php
if($_SESSION['priv'] != 1){
header('Location: /');
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | <?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <link href="<?php echo $icon; ?>" rel="icon">
    <link rel="stylesheet" href="/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/dist/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="/dist/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/dist/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/dist/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/dist/assets/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/dist/assets/vendors/chartist/chartist.min.css">
    <link rel="stylesheet" href="/dist/assets/css/vertical-light-layout/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">

  </head>