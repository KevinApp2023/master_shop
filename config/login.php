<?php
include("../config/conex.php"); 
session_start();

if(!empty($_POST['correo']) & !empty($_POST['pass']) ){
             
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $sql = "SELECT id, nombres, apellidos, correo, telefono, direccion, ciudad, pais, fecha_nacimiento, sexo, pass, priv FROM usuarios WHERE correo='$correo'";
    $resultado = $conex->query($sql);
    $num = $resultado->num_rows;
    if ($num > 0) {
      
      $row = $resultado->fetch_assoc();
      $pass_bd = $row['pass'];
      $pass_c = sha1($pass);
  
      if ($pass_bd == $pass_c) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombres'] = $row['nombres'];
        $_SESSION['apellidos'] = $row['apellidos'];
        $_SESSION['correo'] = $row['correo'];
        $_SESSION['telefono'] = $row['telefono'];
        $_SESSION['direccion'] = $row['direccion'];
        $_SESSION['ciudad'] = $row['ciudad'];
        $_SESSION['pais'] = $row['pais'];
        $_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
        $_SESSION['sexo'] = $row['sexo'];
        $_SESSION['priv'] = $row['priv'];
        echo "Active";
      }else{
        echo "Error 102";
      }
   
  
    }else{
      echo "Error 101";
    }
  
  }