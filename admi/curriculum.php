<?php 
session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
     require 'navigation.php';
     require 'conexion.php';
     $curri=$conexion->query("SELECT * FROM curriculum ");

    while ($rowcurri=$curri->Fetch(PDO::FETCH_ASSOC)) {
    	
          $curric=$rowcurri['curriculum'];
          
          
   }

   $gaevents=$conexion->query("SELECT * FROM ga_events where tipo='cu'  ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
  <form action="savecurriculum.php" method="post">
 <div class="curriculum staff wow animated bounceInUp " data-wow-duration = "2s">
   	   <h1>Curriculum</h1>
   	   <p><textarea name="curriculum" style="width: 100%; height: 400px;"><?php echo $curric;
 ?></textarea></p>

   	   <h2>Staffing by Room</h2>
   	   <p>Infants		4:1
</p>
<p>Toddlers	5:1</p>

<p>Twos		8:1</p>

<p>Preschool	10:1</p>

<p>School Age	20:1</p>


<p></p>
<div class="galeri" style="display: flex;">
  
    <?php foreach ($rowga as $rowga ): ?>
      <div style="width: 21%">
    <img style="width: 100%" src="../fotos/<?php echo $rowga['img'] ?>">

<a style="padding: 10px 30px;background: red;color: white;margin: auto;width: 50% ;display: block;" href="deleteevents.php?id=<?php echo $rowga['id'];  ?>">DELETE</a>
</div>
  <?php endforeach ?>
  
	
</div>
<a style="padding: 10px 30px;background: #FF9800;color: white;margin: auto;width: 50% ;display: block;" href="photoevents.php">EDIT PHOTO</a>
<br>
   </div>
   <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
   </form>
</body>
</html>