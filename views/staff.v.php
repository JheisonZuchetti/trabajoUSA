<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
	<link rel="stylesheet" href="css/animate.css">
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</head>
<body>
  <div class="staff wow animated bounceInUp" data-wow-duration = "2s">
  	   <h1>Meet our Staff</h1>
  	   <div class="box-staff">
  	   	  <?php foreach ($rowstaff as $rowstaff ): ?>
          <div class="box-s">
                
                <h3><?php echo $rowstaff['profe']; ?></h3>
                <h4><?php echo $rowstaff['cargo']; ?></h4>
                <p><?php echo nl2br($rowstaff['biblio']);
 ?></p>
                <img src="fotos/<?php echo $rowstaff['img'] ?>">
                
           </div>
        <?php endforeach ?>
  	   	   
  	   </div>
  </div>
</body>
</html>