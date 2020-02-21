<?php 
   require 'conexion.php';

  



   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE contacto  SET texto ='{$_POST['texto']}'") ;

            if ($update) {
              	header('Location:editcontact.php');
              }  


   }




  

 ?>
