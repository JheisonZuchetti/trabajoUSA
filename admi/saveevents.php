<?php 
   require 'conexion.php';
   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE events  SET gradu='{$_POST['gradu']}', july='{$_POST['july']}', dayca='{$_POST['dayca']}', pioner='{$_POST['pioner']}', progra='{$_POST['progra']}', progra1='{$_POST['progra1']}', titu='{$_POST['titu']}', titu1='{$_POST['titu1']}', titu2='{$_POST['titu2']}', titu3='{$_POST['titu3']}', progra2='{$_POST['progra2']}'") ;

            if ($update) {
              	header('Location:events.php');
              }  


   }






 ?>