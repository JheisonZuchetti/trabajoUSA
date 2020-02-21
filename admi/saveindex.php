<?php 
   require 'conexion.php';
   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE home  SET present='{$_POST['present']}', director='{$_POST['director']}', mision='{$_POST['mision']}', philo='{$_POST['philo']}', goal='{$_POST['goal']}', goal1='{$_POST['goal1']}', goal2='{$_POST['goal2']}', name='{$_POST['name']}'") ;

            if ($update) {
              	header('Location:index.php');
              }  


   }






 ?>