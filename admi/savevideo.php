<?php 
require 'conexion.php';
      if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $check = @getimagesize($_FILES['foto']['tmp_name']);

  

    $carpeta_destino = '../fotos/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];    

    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    
    $actualizar=$conexion->query("INSERT INTO video (id , video) VALUES (NULL, '{$_FILES['foto']['name']}' )");

    if ($actualizar) {
        
        header('Location:video.php');
    }



}

 ?>