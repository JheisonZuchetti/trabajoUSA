<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     $menu=$conexion->query("SELECT * FROM menu ");

    while ($rowmenu=$menu->Fetch(PDO::FETCH_ASSOC)) {
    	
          $año = $rowmenu['año'];
          $fecha1 = $rowmenu['fecha1'];
          $fecha2 = $rowmenu['fecha2'];
          $fecha3 = $rowmenu['fecha3'];
          $fecha4 = $rowmenu['fecha4'];
          $fecha5 = $rowmenu['fecha5'];
          $day1 = $rowmenu['day1'];
          $day2 = $rowmenu['day2'];
          $day3 = $rowmenu['day3'];
          $day4 = $rowmenu['day4'];
          $day5 = $rowmenu['day5'];
          $pdf = $rowmenu['pdf'];
          
          
          
          
          
          

      }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="../css/stile.css">
 </head>
 <body>
  <form action="savemenu.php" method="post">
  <div class="menu-a">
  <h1>Menu</h1>
  <p>Welcome to our new page where you will find the latest Monthly Menu.
 </p>
   <input style="width: 80%;margin: auto;padding: 5px;display: block;margin-bottom: 20px;" type="text" name="pdf" placeholder="Enter Link">
  <h4>Access our full Menu by clicking on the link…</h4>
  <a target="_blanck" href="<?php echo $pdf ?>">Full Menu</a>
  <div class="fechaa">
    <p><input type="text" name="año" value="<?php echo $año ?>"></p>
  </div>
   <div class="day">
    <div class="box-day">
      <h2><input type="text" name="fecha1" value="<?php echo $fecha1 ?>"></h2>
      <h3>Monday</h3>
      <p><textarea name="day1" style="width: 100%; height: 200px;"><?php echo $day1; ?></textarea></p>
    </div>
    <div class="box-day">
      <h2><input type="text" name="fecha2" value="<?php echo $fecha2 ?>"></h2>
      <h3>Tuesday</h3>
      <p><textarea name="day2" style="width: 100%; height: 200px;"><?php echo $day2; ?></textarea></p>
    </div>
    <div class="box-day">
      <h2><input type="text" name="fecha3" value="<?php echo $fecha3 ?>"></h2>
      <h3>Wednesday</h3>
      <p><textarea name="day3"  style="width: 100%; height: 200px;"><?php echo $day3; ?></textarea></p>
    </div>
    <div class="box-day">
      <h2><input type="text" name="fecha4" value="<?php echo $fecha4 ?>"></h2>
      <h3>Thursday</h3>
      
      <p><textarea name="day4" style="width: 100%; height: 200px;"><?php echo $day4; ?></textarea></p>
    </div>
    <div class="box-day">
      <h2><input type="text" name="fecha5" value="<?php echo $fecha5 ?>"></h2>
      <h3>Friday</h3>
      
      <p><textarea name="day5" style="width: 100%; height: 200px;"><?php echo $day5; ?></textarea></p>
    </div>

   </div>
 </div>
 <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
 </form>
 </body>
 </html>