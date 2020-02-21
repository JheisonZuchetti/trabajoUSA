<?php 
    require 'views/menu.php';
    require 'admi/conexion.php';

    $index=$conexion->query("SELECT * FROM contacto ");

while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
  
      $texto = $rowindex['texto'];
      
      
      

  }

    require 'views/contact-us.v.php';
    require 'contact.php';
    require 'views/footer.php';

 ?>