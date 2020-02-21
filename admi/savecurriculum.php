<?php 
   require 'conexion.php';
   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE  curriculum
              SET curriculum='{$_POST['curriculum']}'") ;

            if ($update) {
              	header('Location:curriculum.php');
              }  


   }






 ?>