<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     $staff=$conexion->query("SELECT * FROM staff ");

    $rowstaff=$staff->FetchAll(PDO::FETCH_ASSOC);
    	
        
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
<div class="staff wow animated bounceInUp" data-wow-duration = "2s">
  	   <h1>Meet our Staff</h1>
       <a style="display: block;background: #FF9800; padding: 10px 0;text-align: center;color: white;" href="addstaff.php">ADD TEACHER</a>
  	   <div class="box-staff">

  	   	<?php foreach ($rowstaff as $rowstaff ): ?>
  	   		<div class="box-s">
  	   	   	    
  	   	   	    <h3><?php echo $rowstaff['profe']; ?></h3>
  	   	   	    <h4><?php echo $rowstaff['cargo']; ?></h4>
  	   	   	    <p><?php echo nl2br($rowstaff['biblio']);
 ?></p>
  	   	   	    <img src="../fotos/<?php echo $rowstaff['img'] ?>">
  	   	   	    <a style="padding: 5px 20px; background: black; color: white;cursor: pointer;" href="editstaff.php?id=<?php echo $rowstaff['id'];  ?>">EDIT</a>
                <a style="margin-left: 20px;background: red;color: white;padding: 5px 10px;" href="delete.php?id=<?php echo $rowstaff['id'];  ?>">DELETE</a>
  	   	   </div>
  	   	<?php endforeach ?>
  	   	   
  	   	   
  	   	   
  	   </div>
  </div>
</body>
</html>