<?php 
   require 'conexion.php';
   if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

            $update=$conexion->query(" UPDATE rates  SET p1='{$_POST['p1']}', p2='{$_POST['p2']}', p3='{$_POST['p3']}', p4='{$_POST['p4']}', p5='{$_POST['p5']}', p6='{$_POST['p6']}', p7='{$_POST['p7']}', p8='{$_POST['p8']}', adic='{$_POST['adic']}', escale='{$_POST['escale']}', escale1='{$_POST['escale1']}', reg='{$_POST['reg']}', reg1='{$_POST['reg1']}', reg2='{$_POST['reg2']}', hour='{$_POST['hour']}', notice='{$_POST['notice']}', holiday='{$_POST['holiday']}'") ;

            if ($update) {
              	header('Location:rates.php');
              }  


   }






 ?>