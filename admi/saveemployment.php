<?php 
   require 'conexion.php';

  



   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE empleo SET texto ='{$_POST['texto']}'") ;

            if ($update) {
              	header('Location:editemployment.php');
              }  


   }




  

 ?>