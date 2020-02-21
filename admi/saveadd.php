<?php 
   require 'conexion.php';
   
  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $check = @getimagesize($_FILES['foto']['tmp_name']);

  if($check !== false) {

    $carpeta_destino = '../fotos/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];    

    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    
    $actualizar=$conexion->query("INSERT INTO staff (id,profe,biblio,img) values (null, '{$_POST['name']}', '{$_POST['biblio']}', '{$_FILES['foto']['name']}' ) ");

    if ($actualizar) {
    	
    	header('Location:staff.php');
    }


 }else{

 	
 }
}

 ?>