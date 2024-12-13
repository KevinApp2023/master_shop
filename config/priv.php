<?php

   if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    if ($_SESSION['priv'] != 1){
        header("Location: /");
    }

   }else{
    header("Location: /");

   }

   ?>
