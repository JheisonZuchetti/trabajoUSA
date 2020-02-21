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
   <div class="curriculum staff wow animated bounceInUp " data-wow-duration = "2s">
   	   <h1>Curriculum</h1>
        <br>
   	   <p><?php echo nl2br($curric) ?></p>
         
         <br>
   	   <h2>Staffing by Room</h2>
   	   <p>Infants		4:1
</p>
<p>Toddlers	5:1</p>

<p>Twos		8:1</p>

<p>Preschool	10:1</p>

<p>School Age	20:1</p>


<p></p>
<div class="galeri">
	<?php foreach ($rowga as $rowga ): ?>
      <div >
    <img style="width: 100%" src="fotos/<?php echo $rowga['img'] ?>">

</div>
  <?php endforeach ?>
</div>
   </div>
</body>
</html>