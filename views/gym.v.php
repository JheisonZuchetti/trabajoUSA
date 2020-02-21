<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
  <div class="box-gym">
  	  <h1>Gym Rental</h1>
  	  <p><?php echo nl2br($a); ?></p>

  	  <h3>Cost</h3>
  	  <p style="background: #FF9800; padding: 5px 15px;"><?php echo nl2br($b); ?></p>
  	  
       <br>
       <br>
  	  <span style="font-style: oblique;"><?php echo nl2br($c); ?></span>

  	 

  	  <div class="image">
  	  	 <?php foreach ($rowga as $rowga ): ?>
      <div style="width: 21%">
    <img style="width: 100%" src="fotos/<?php echo $rowga['img'] ?>">
</div>
  <?php endforeach ?>
  	  </div>
  </div>
</body>
</html>