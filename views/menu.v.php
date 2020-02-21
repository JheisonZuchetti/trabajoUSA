<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
 <div class="menu-a">
 	<h1>Menu</h1>
 	<p>Welcome to our new page where you will find the latest Monthly Menu.
 </p>

 	<h4>Access our full Menu by clicking on the link…</h4>
 	<a target="_blanck" href="<?php echo $pdf ?>">Full Menu</a>
 	<div class="fechaa">
 		<p><?php echo $año?>
 	</div>
 	 <div class="day">
 	 	<div class="box-day">
 	 		<h2><?php echo $fecha1?></h2>
 	 		<h3>Monday</h3>
 	 		<p><?php echo nl2br($day1); ?></p>
 	 	</div>
 	 	<div class="box-day">
 	 		<h2><?php echo $fecha2?></h2>
 	 		<h3>Tuesday</h3>
 	 		<p><?php echo nl2br($day2); ?></p>
 	 	</div>
 	 	<div class="box-day">
 	 		<h2><?php echo $fecha3?></h2>
 	 		<h3>Wednesday</h3>
 	 		<p><?php echo nl2br($day3); ?></p>
 	 	</div>
 	 	<div class="box-day">
 	 		<h2><?php echo $fecha4?></h2>
 	 		<h3>Thursday</h3>
 	 		
 	 		<p><?php echo nl2br($day4); ?></p>
 	 	</div>
 	 	<div class="box-day">
 	 		<h2><?php echo $fecha5?></h2>
 	 		<h3>Friday</h3>
 	 		
 	 		<p><?php echo nl2br($day5); ?></p>
 	 	</div>

 	 </div>
 </div>
</body>
</html>