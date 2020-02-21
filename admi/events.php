<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     $events=$conexion->query("SELECT * FROM events ");

    while ($rowevents=$events->Fetch(PDO::FETCH_ASSOC)) {
    	
          $gradu = $rowevents['gradu'];
          $july = $rowevents['july'];
          $dayca = $rowevents['dayca'];
          $pioner = $rowevents['pioner'];
          $progra = $rowevents['progra'];
          $progra1 = $rowevents['progra1'];
           $progra2 = $rowevents['progra2'];
          $titu = $rowevents['titu'];
          $titu1 = $rowevents['titu1'];
          $titu2 = $rowevents['titu2'];
          $titu3 = $rowevents['titu3'];

          
          

      }

$gaevents=$conexion->query("SELECT * FROM ga_events where tipo='a' ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);

  $gaevents1=$conexion->query("SELECT * FROM ga_events where tipo='b' ");

    $rowga1=$gaevents1->FetchAll(PDO::FETCH_ASSOC);
    
    $gaevents2=$conexion->query("SELECT * FROM ga_events where tipo='c' ");

    $rowga2=$gaevents2->FetchAll(PDO::FETCH_ASSOC);  
      

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
  <form action="saveevents.php" method="post">
   <div class="event">
   	   <h1>News and Events</h1>

   	     <h2><input style="width: 90%;margin: auto;" type="text" name="titu" value="<?php echo $titu ?>">
</h2>
<p><textarea name="gradu" style="width: 100%; height: 50px;"><?php echo $gradu ?> </textarea>
</p>
<div class="box-grad">
  <?php foreach ($rowga as $rowga ): ?>
    <div style="width: 20%">
      <img style="width: 100%" src="../fotos/<?php echo $rowga['img'] ?>">
      <a style="padding: 10px 30px;background: red;color: white;margin: auto; " href="deleteevents.php?id=<?php echo $rowga['id'];  ?>">DELETE</a>
    </div>
      
  <?php endforeach ?>
	
	
</div>
<a style="padding: 10px;text-align: center;background: #00BCD4;color: white ;width: 100%" href="photoevents.php">EDIT PHOTO</a>
 <h2><input style="width: 90%;margin: auto;" type="text" name="titu1" value="<?php echo $titu1 ?>"></h2>
 <p><textarea name="july" style="width: 100%; height: 100px;" ><?php echo $july ?></textarea>  
</p>
<div class="box-grad">
	<?php foreach ($rowga1 as $rowga1 ): ?>
    <div style="width: 20%">
      <img style="width: 100%" src="../fotos/<?php echo $rowga1['img'] ?>">
      <a style="padding: 10px 30px;background: red;color: white;margin: auto; " href="deleteevents.php?id=<?php echo $rowga1['id'];  ?>">DELETE</a>
    </div>
      
  <?php endforeach ?>
	
</div>
 <a style="padding: 10px;text-align: center;background: #00BCD4;color: white ;width: 100%" href="photoevents.php">EDIT PHOTO</a>
 <h2><input style="width: 90%;margin: auto;" type="text" name="titu2" value="<?php echo $titu2 ?>"></h2>
 <p><textarea name="dayca" style="width: 100%; height: 100px;"><?php echo $dayca ?></textarea>
</p>

<span style="font-style: oblique;padding: 15px 0;display: block;"><textarea name="pioner" style="width: 100%; height: 80px;" ><?php echo $pioner ?></textarea></span>

<p><input style="width: 90%;margin: auto;" type="text" name="titu3" value="<?php echo $titu3 ?>"></p>
<li><textarea name="progra" style="width: 100%; height: 50px;" ><?php echo $progra ?></textarea></li>
<li><textarea name="progra1" style="width: 100%; height: 50px;"><?php echo $progra1; ?></textarea>
</li>
<li><textarea name="progra2" style="width: 100%; height: 50px;"><?php echo $progra2; ?></textarea></li>

<div class="box-grad">
	<?php foreach ($rowga2 as $rowga2 ): ?>
    <div style="width: 20%">
      <img style="width: 100%" src="../fotos/<?php echo $rowga2['img'] ?>">
      <a style="padding: 10px 30px;background: red;color: white;margin: auto; " href="deleteevents.php?id=<?php echo $rowga2['id'];  ?>">DELETE</a>
    </div>
      
  <?php endforeach ?>
	
</div>
<a style="padding: 10px;text-align: center;background: #00BCD4;color: white ;width: 100%" href="photoevents.php">EDIT PHOTO</a>
   </div>
   <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
   </form>
</body>
</html>