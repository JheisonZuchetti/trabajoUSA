<?php 
   require 'conexion.php';
   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE  menu
              SET año='{$_POST['año']}', fecha1='{$_POST['fecha1']}', fecha2='{$_POST['fecha2']}', fecha3='{$_POST['fecha3']}', fecha4='{$_POST['fecha4']}', fecha5='{$_POST['fecha5']}', day1='{$_POST['day1']}', day2='{$_POST['day2']}', day3='{$_POST['day3']}', day4='{$_POST['day4']}', day5='{$_POST['day5']}', pdf='{$_POST['pdf']}'") ;

            if ($update) {
              	header('Location:menu.php');
              }  


   }






 ?>