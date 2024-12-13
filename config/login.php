<?php
include("../config/conex.php"); 
session_start();

if(!empty($_POST['user']) & !empty($_POST['pass']) ){
             
    $user = $_POST['user'];
    $pss = $_POST['pass'];

    $sql = "SELECT id, id_perfil, pass, priv FROM user WHERE user='$user'";
    $resultado = $conex->query($sql);
    $num = $resultado->num_rows;
    if ($num > 0) {
      
      $row = $resultado->fetch_assoc();
      $pass_bd = $row['pass'];
      $pass_c = sha1($pass);
  
      if ($pass_bd == $pass_c) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['id_perfil'] = $row['id_perfil'];
        $_SESSION['user'] = $row['user'];
        $_SESSION['priv'] = $row['priv'];
      }else{
        echo "Contraseña incorrecta, Intente nuevamente con una nueva contraseña!";
      }
   
  
    }else{
      echo "El usuario no existe, Intente nuevamente con un usuario diferente!";
    }
  
  }