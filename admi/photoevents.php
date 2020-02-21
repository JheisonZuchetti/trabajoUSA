<?php 
  require 'navigation.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
   <div style="padding-top: 140px">
   	  <form  style="display: flex;flex-direction: column;width: 40%;margin: auto;" action="savephotoe.php" method="post" enctype="multipart/form-data">
   	  	  <select style="margin-bottom: 20px;height: 40px;" name="tipo">
   	  	  	<option value="a">Events A</option>
   	  	  	<option value="b">Events B</option>
   	  	  	<option value="c">Events C</option>
            <option value="d">Director</option>
            <option value="s">Statement</option>
            <option value="cu">Curriculum</option>
            <option value="gym">Gym Rental</option>
   	  	  </select>
   	  	  <input style="padding: 20px;border:1px solid #ff9800;margin-bottom: 20px;" type="file" name="foto" required="">
   	  	  <input style="padding: 10px 0;background: #ff9800;color: white;border: none;cursor: pointer;" type="submit" value="SAVE" name="">
   	  </form>
   </div>
</body>
</html>