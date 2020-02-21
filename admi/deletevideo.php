<?php 
require 'conexion.php';
   $id = isset($_GET['id']) ? (String)$_GET['id'] : false;

   if ($id!='') {
   
      $activar=$conexion->query("DELETE FROM video where id='$id' ");

      if ($activar) {
      	header('Location:video.php');
      }



   }


 ?>