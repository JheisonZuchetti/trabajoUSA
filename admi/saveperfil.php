<?php 
   require 'conexion.php';
   
  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $check = @getimagesize($_FILES['foto']['tmp_name']);

  if($check !== false) {

    $carpeta_destino = '../fotos/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];    

    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    
    $actualizar=$conexion->query("UPDATE staff set img='{$_FILES['foto']['name']}' , profe='{$_POST['name']}', cargo='{$_POST['cargo']}', biblio='{$_POST['biblio']}' where id='{$_POST['id']}' ");

    if ($actualizar) {
    	
    	header('Location:staff.php');
    }


 }else{

 	$actualizar=$conexion->query("UPDATE staff set  profe='{$_POST['name']}', cargo='{$_POST['cargo']}',  biblio='{$_POST['biblio']}' where id='{$_POST['id']}' ");

    if ($actualizar) {
    	
    	header('Location:staff.php');
    }
 }
}

 ?>