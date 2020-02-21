<?php 
  require 'views/menu.php';
  require 'admi/conexion.php';
     $staff=$conexion->query("SELECT * FROM staff ");

    $rowstaff=$staff->FetchAll(PDO::FETCH_ASSOC);
  require 'views/staff.v.php';
  require 'views/footer.php';


 ?>