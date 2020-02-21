<?php 
   
   require 'views/menu.php';
   require 'admi/conexion.php';
     $curri=$conexion->query("SELECT * FROM curriculum ");

    while ($rowcurri=$curri->Fetch(PDO::FETCH_ASSOC)) {
    	
          $curric=$rowcurri['curriculum'];
          
          
   }

   $gaevents=$conexion->query("SELECT * FROM ga_events where tipo='cu'  ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);

   require 'views/curiculum.v.php';
   require 'views/footer.php';


 ?>