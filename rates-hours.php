<?php 

require 'views/menu.php';

 require 'admi/conexion.php';
     $rates=$conexion->query("SELECT * FROM rates ");

    while ($rowrates=$rates->Fetch(PDO::FETCH_ASSOC)) {
    	
          $p1 = $rowrates['p1'];
          $p2 = $rowrates['p2'];
          $p3 = $rowrates['p3'];
          $p4 = $rowrates['p4'];
          $p5 = $rowrates['p5'];
          $p6 = $rowrates['p6'];
          $p7 = $rowrates['p7'];
          $p8 = $rowrates['p8'];
          $adic = $rowrates['adic'];
          $escale = $rowrates['escale'];
          $escale1 = $rowrates['escale1'];
          $reg = $rowrates['reg'];
          $reg1 = $rowrates['reg1'];
          $reg2 = $rowrates['reg2'];
          $hour = $rowrates['hour'];
          $notice = $rowrates['notice'];
          $holiday = $rowrates['holiday'];
          
          
          

      }
require 'views/rates-hours.v.php';
require 'views/footer.php';


 ?>