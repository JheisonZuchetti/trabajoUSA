<?php require 'views/menu.php';
      
      require 'admi/conexion.php';
     $events=$conexion->query("SELECT * FROM events ");

    while ($rowevents=$events->Fetch(PDO::FETCH_ASSOC)) {
    	
          $gradu = $rowevents['gradu'];
          $july = $rowevents['july'];
          $dayca = $rowevents['dayca'];
          $pioner = $rowevents['pioner'];
          $progra = $rowevents['progra'];
          $progra1 = $rowevents['progra1'];
          $progra2 = $rowevents['progra2'];
          $titu = $rowevents['titu'];
          $titu1 = $rowevents['titu1'];
          $titu2 = $rowevents['titu2'];
          $titu3 = $rowevents['titu3'];
          
          

      }

$gaevents=$conexion->query("SELECT * FROM ga_events where tipo='a' ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);

  $gaevents1=$conexion->query("SELECT * FROM ga_events where tipo='b' ");

    $rowga1=$gaevents1->FetchAll(PDO::FETCH_ASSOC);
    
    $gaevents2=$conexion->query("SELECT * FROM ga_events where tipo='c' ");

    $rowga2=$gaevents2->FetchAll(PDO::FETCH_ASSOC);  
      

      require 'views/events.v.php';
      require 'views/footer.php';




 ?>