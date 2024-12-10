<?php
session_start();
$ref = '12442';
if (isset($_SESSION['cart'][$ref])) {
    unset($_SESSION['cart'][$ref]);
}

?>