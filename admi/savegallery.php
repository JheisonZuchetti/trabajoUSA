<?php 
require 'conexion.php';
      if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $check = @getimagesize($_FILES['foto']['tmp_name']);

  if($check !== false) {

    $carpeta_destino = '../fotos/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];    

    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    
    $actualizar=$conexion->query("INSERT INTO gallery (id , img) VALUES (NULL, '{$_FILES['foto']['name']}' )");

    if ($actualizar) {
        
        header('Location:gallery.php');
    }


 }else{

 }
}

 ?>