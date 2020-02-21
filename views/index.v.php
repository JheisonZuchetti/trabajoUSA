<!DOCTYPE html>
<html>
<head>
	<title>Musted</title>
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
  <link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body>
	
  <div class="texto">
  	 <div class="dr "  >
  	 	<h1 class="wow animated bounceInLeft box3" data-wow-delay = "0.2s">Mustard Seed Christian Daycare and <span>Preschool</span> </h1>
  	 	<p class="wow animated bounceInLeft box3" data-wow-delay = "0.6s"><?php echo nl2br($present); ?></p>
  	 	<p style="font-style: oblique;" class="wow animated bounceInLeft box3" data-wow-delay = "1s">“For truly I tell you, if you have faith the size of a mustard seed, you will say to this mountain, ‘Move from here to there,’ and it will move; and nothing will be impossible for you” (Matthew 17:20-21)."</p>
  	 </div>
  	 <div class="iz">
  	 	<img src="img/fondo1.jpg">
  	 </div>
  </div>
   <div class="nosotros">
   	   <div class="texto-nosotros">
   	   	<div class="left-no content wow fadeInLeft" data-wow-duration = "2s">
   	   		<h1>Welcome from the Director</h1>
   	   	  <p><?php echo nl2br($director); ?> 
   	   	  	<br>
   	   	  	<br>
   	   	  	<p><span><?php echo $name; ?></span></p>
</p>
   	   	</div>
   	   	<div class="rigth-no">
   	   		 <?php foreach ($rowga as $rowga ): ?>
            <img src="fotos/<?php echo $rowga['img'] ?>">
          <?php endforeach ?>
   	   	</div>
   	   	  
   	   </div>
   	   
   </div>
   <div class="mision">
   	   <div class="stm content wow fadeInLeft" data-wow-duration = "2s">
   	   	  <h1>Mission Statement</h1>
   	   	  <p><?php echo nl2br($mision); ?> 
</p>
<?php foreach ($rowga1 as $rowga1 ): ?>
  <img src="fotos/<?php echo $rowga1['img'] ?>">
<?php endforeach ?>
   	   </div>

   	   <div class="philo content wow fadeInLeft" data-wow-duration = "2s">
   	   	 <h3>Our Center’s Philosophy 
</h3>
<p><?php echo nl2br($philo); ?>
 
</p>
   	   </div>



   </div>

  <div class="goal">
  	  <h1>Center Goals</h1>
  	  <div class="part">
  	  	 <div class="box wow animated bounceInLeft box1" data-wow-delay = "0.2s">
  	  	 	 <h1>-<span>1.</span></h1>
  	  	 	 <p><?php echo nl2br($goal); ?>
            </p>
  	  	 </div>
  	  	 <div class="box wow animated bounceInLeft box2" data-wow-delay = "0.8s">
  	  	 	 <h1>--<span>2.</span></h1>
  	  	 	 <p><?php echo nl2br($goal1); ?>
            </p>
  	  	 </div>
  	  	 <div class="box wow animated bounceInLeft box3" data-wow-delay = "1.4s">
  	  	 	 <h1>---<span>3.</span></h1>
  	  	 	 <p><?php echo nl2br($goal2); ?>
            </p>
  	  	 </div>
  	  </div>
  </div>
  <div class="galery">
       <h1>Gallery</h1>
       <div class="box-galery">
         <?php foreach ($gallery as $gallery ): ?>
         
         <a href='fotos/<?php echo $gallery['img'] ?>' data-lightbox='Foto' data-title='foto' >
        
            
            <img src='fotos/<?php echo $gallery['img'] ?>'>
          
          
        </a>
       <?php endforeach ?>
        
       </div>
  </div>
   <div class="vid">
      <h1>What parents think about us</h1>
      <div class="box-vid">
         <?php foreach ($rowvideo as $rowvideo ): ?>
           <video controls="" src="fotos/<?php echo $rowvideo['video'] ?>  "></video>
         <?php endforeach ?>
      </div>
   </div>

	
</body>
</html>