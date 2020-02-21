<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
   <div class="event">
   	   <h1>News and Events</h1>

   	     <h2><?php echo $titu; ?>
</h2>
<p><?php echo nl2br($gradu) ?>
</p>
<div class="box-grad">
	 <?php foreach ($rowga as $rowga ): ?>
    <div >
      <img style="width: 100%" src="fotos/<?php echo $rowga['img'] ?>">
      
    </div>
      
  <?php endforeach ?>
	
</div>
 <h2><?php echo $titu1; ?></h2>
 <p><?php echo nl2br($july) ?> 
</p>
<div class="box-grad">
	<?php foreach ($rowga1 as $rowga1 ): ?>
    <div >
      <img style="width: 100%" src="fotos/<?php echo $rowga1['img'] ?>">
      
    </div>
      
  <?php endforeach ?>
	
</div>
 
 <h2><?php echo $titu2; ?></h2>
 <p><?php echo nl2br($dayca) ?>
</p>

<span style="font-style: oblique;padding: 15px 0;display: block;"><?php echo nl2br($pioner) ?></span>

<p><?php echo $titu3; ?></p>
<li><?php echo nl2br($progra) ?></li>
<li><?php echo nl2br($progra1) ?>
</li>
<li><?php echo nl2br($progra2) ?></li>

<div class="box-grad">
	<?php foreach ($rowga2 as $rowga2 ): ?>
    <div >
      <img style="width: 100%" src="fotos/<?php echo $rowga2['img'] ?>">
      
    </div>
      
  <?php endforeach ?>
	
</div>
   </div>
</body>
</html>