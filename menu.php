<?php 
   require 'views/menu.php';

   require 'admi/conexion.php';
     $menu=$conexion->query("SELECT * FROM menu ");

    while ($rowmenu=$menu->Fetch(PDO::FETCH_ASSOC)) {
    	
          $año = $rowmenu['año'];
          $fecha1 = $rowmenu['fecha1'];
          $fecha2 = $rowmenu['fecha2'];
          $fecha3 = $rowmenu['fecha3'];
          $fecha4 = $rowmenu['fecha4'];
          $fecha5 = $rowmenu['fecha5'];
          $day1 = $rowmenu['day1'];
          $day2 = $rowmenu['day2'];
          $day3 = $rowmenu['day3'];
          $day4 = $rowmenu['day4'];
          $day5 = $rowmenu['day5'];
          $pdf = $rowmenu['pdf'];
          
          
          
          
          
          

      }
  require 'views/menu.v.php';
  require 'views/footer.php';

 ?>