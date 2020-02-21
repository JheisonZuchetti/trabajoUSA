<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     $index=$conexion->query("SELECT * FROM home ");

    while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
    	
          $present = $rowindex['present'];
          $director = $rowindex['director'];
          $name = $rowindex['name'];
          $mision = $rowindex['mision'];
          $philo = $rowindex['philo'];
          $goal = $rowindex['goal'];
          $goal1 = $rowindex['goal1'];
          $goal2 = $rowindex['goal2'];
          

      }


      $rates=$conexion->query("SELECT * FROM gallery ");

    $gallery=$rates->FetchAll(PDO::FETCH_ASSOC);

    $gaevents=$conexion->query("SELECT * FROM ga_events where tipo='d' limit 1 ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);

  $gaevents1=$conexion->query("SELECT * FROM ga_events where tipo='s' limit 1 ");

    $rowga1=$gaevents1->FetchAll(PDO::FETCH_ASSOC);

    $video=$conexion->query("SELECT * FROM video  ");

    $rowvideo=$video->FetchAll(PDO::FETCH_ASSOC);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
	<form action="saveindex.php" method="post">
 <div class="texto">
  	 <div class="dr "  >
  	 	<h1 style="line-height: 1" class="wow animated bounceInLeft box3" data-wow-delay = "0.2s">Mustard Seed Christian Daycare and <span>Preschool</span> </h1>
  	 	<p class="wow animated bounceInLeft box3" data-wow-delay = "0.6s"><textarea style="width: 100%;" type="text" name="present" ><?php echo nl2br($present); ?></textarea></p>
  	 	<p style="font-style: oblique;" class="wow animated bounceInLeft box3" data-wow-delay = "1s">“For truly I tell you, if you have faith the size of a mustard seed, you will say to this mountain, ‘Move from here to there,’ and it will move; and nothing will be impossible for you” (Matthew 17:20-21)."</p>
  	 </div>
  	 <div class="iz">
  	 	<img src="../img/fondo1.jpg">
  	 </div>
  </div>
   <div class="nosotros">
   	   <div class="texto-nosotros">
   	   	<div class="left-no content wow fadeInLeft" data-wow-duration = "2s">
   	   		<h1>Welcome from the Director</h1>
   	   	  <p><textarea style="width: 100%; display: block;height: 200px" type="text" name="director" ><?php echo $director; ?></textarea>
   	   	  	<br>
   	   	  	<br>
   	   	  	<p><span><input style="width: 100%" type="text" name="name" value="<?php echo $name ?>"></span></p>
</p>
   	   	</div>
   	   	<div style="display: flex;flex-direction: column;" class="rigth-no">
          <?php foreach ($rowga as $rowga ): ?>
            <img src="../fotos/<?php echo $rowga['img'] ?>">
          <?php endforeach ?>
   	   		 
           <a style="padding: 10px 30px;background: #FF9800;color: white;margin: auto;width: 50% ;display: block;" href="photoevents.php">EDIT PHOTO</a>
<br>
<a style="padding: 10px 30px;background: red;color: white;margin: auto;width: 50% ;display: block;" href="deleteevents.php?id=<?php echo $rowga['id'];  ?>">DELETE</a>
   	   	</div>
   	   	  
   	   </div>
   	   <!--
   	   <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around 
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>-->
   </div>
   <div class="mision">
   	   <div class="stm content wow fadeInLeft" data-wow-duration = "2s">
   	   	  <h1>Mission Statement</h1>
   	   	  <p><textarea style="width: 100%;
 height: 150px;
" type="text" name="mision" ><?php echo $mision; ?></textarea>
</p>
<?php foreach ($rowga1 as $rowga1 ): ?>
  <img src="../fotos/<?php echo $rowga1['img'] ?>">
<?php endforeach ?>

<a style="padding: 10px 30px;background: #FF9800;color: white;margin: auto;width: 50% ;display: block;" href="photoevents.php">EDIT PHOTO</a>
<br>
<a style="padding: 10px 30px;background: red;color: white;margin: auto;width: 50% ;display: block;" href="deleteevents.php?id=<?php echo $rowga['id'];  ?>">DELETE</a>
   	   </div>

   	   <div class="philo content wow fadeInLeft" data-wow-duration = "2s">
   	   	 <h3>Our Center’s Philosophy 
</h3>
<p><textarea style="width: 100%; height: 400px;" type="text" name="philo" ><?php echo $philo; ?></textarea> 
 
</p>
   	   </div>



   </div>

  <div class="goal">
  	  <h1>Center Goals</h1>
  	  <div class="part">
  	  	 <div class="box wow animated bounceInLeft box1" data-wow-delay = "0.2s">
  	  	 	 <h1>-<span>1.</span></h1>
  	  	 	 <p><textarea style="width: 100%;
 height: 100px;
" type="text" name="goal" ><?php echo $goal; ?></textarea>
            </p>
  	  	 </div>
  	  	 <div class="box wow animated bounceInLeft box2" data-wow-delay = "0.8s">
  	  	 	 <h1>--<span>2.</span></h1>
  	  	 	 <p><textarea style="width: 100%;
 height: 100px;
" type="text" name="goal1" ><?php echo $goal1; ?></textarea>
            </p>
  	  	 </div>
  	  	 <div class="box wow animated bounceInLeft box3" data-wow-delay = "1.4s">
  	  	 	 <h1>---<span>3.</span></h1>
  	  	 	 <p> <textarea style="width: 100%;
 height: 100px;
" type="text" name="goal2" ><?php echo $goal2; ?></textarea>
            </p>
  	  	 </div>
  	  </div>
  </div>
  <div class="galery">
       <h1>Gallery</h1>
       <div class="box-galery">
       <?php foreach ($gallery as $gallery ): ?>
         
         <a href='../fotos/<?php echo $gallery['img'] ?>' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='../fotos/<?php echo $gallery['img'] ?>'>
          
          
        </a>
       <?php endforeach ?>
       
         <a style="padding: 10px;width: 100%;background: green; color: white;text-align: center;" href="gallery.php">EDIT GALLERY</a>
        
       </div>
  </div>
   <div class="vid">
      <h1>What parents think about us</h1>
      <div class="box-vid">
         <?php foreach ($rowvideo as $rowvideo ): ?>
           <video controls="" src="../fotos/<?php echo $rowvideo['video'] ?>  "></video>
         <?php endforeach ?>


      </div>
      <a style="padding: 10px 30px;background: #FFF;color: #FF9800;margin: auto;width: 100% ;display: block;text-align: center;" href="video.php">EDIT VIDEO</a>
   </div>
    <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
   </form>
</body>
</html>