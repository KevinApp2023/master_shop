<?php
session_start();
$ref = $_GET['ref_p'];
if (isset($_SESSION['cart'][$ref])) {
    unset($_SESSION['cart'][$ref]);
}

?>