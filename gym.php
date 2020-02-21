<?php 
 require 'views/menu.php';

 

   
     require 'admi/conexion.php';
     $index=$conexion->query("SELECT * FROM gym ");

    while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
      
          $a = $rowindex['a'];
          $b = $rowindex['b'];
          $c = $rowindex['c'];
          
          

      }
 

 $gaevents=$conexion->query("SELECT * FROM ga_events where tipo='gym'  ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);
    
 require 'views/gym.v.php';
 require 'views/footer.php';


 ?>