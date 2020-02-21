<?php 
  require 'views/menu.php';
  

  require 'admi/conexion.php';
     $index=$conexion->query("SELECT * FROM home ");

    while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
    	
          $present = $rowindex['present'];
          $director = $rowindex['director'];
          $mision = $rowindex['mision'];
          $philo = $rowindex['philo'];
          $goal = $rowindex['goal'];
          $goal1 = $rowindex['goal1'];
          $goal2 = $rowindex['goal2'];
          $name = $rowindex['name'];
          

      }

      $inde=$conexion->query("SELECT * FROM staff limit 1");

    while ($rowind=$inde->Fetch(PDO::FETCH_ASSOC)) {
      
          $img = $rowind['img'];
          
          

      }

$rates=$conexion->query("SELECT * FROM gallery ");

    $gallery=$rates->FetchAll(PDO::FETCH_ASSOC);

    $gaevents=$conexion->query("SELECT * FROM ga_events where tipo='d' limit 1 ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);

  $gaevents1=$conexion->query("SELECT * FROM ga_events where tipo='s' limit 1 ");

    $rowga1=$gaevents1->FetchAll(PDO::FETCH_ASSOC);

    $video=$conexion->query("SELECT * FROM video  ");

    $rowvideo=$video->FetchAll(PDO::FETCH_ASSOC);

require 'views/index.v.php';
  require 'contact.php';
  require 'views/footer.php';
 ?>