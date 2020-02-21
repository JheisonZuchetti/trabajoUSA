<?php 
   require 'conexion.php';
   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE gym  SET a='{$_POST['a']}', b='{$_POST['b']}', c='{$_POST['c']}'") ;

            if ($update) {
              	header('Location:gym.php');
              }  


   }






 ?>