<?php session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     $rates=$conexion->query("SELECT * FROM gallery ");

    $gallery=$rates->FetchAll(PDO::FETCH_ASSOC);
    	
          
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="display: flex;padding-top: 130px; width: 95%;margin: auto;">
		<div style="width: 40%;background: #f2f2f2;">
			<form action="savegallery.php" method="post" enctype="multipart/form-data">
				<input required="" style="padding: 20px;" type="file" name="foto">
				<input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
			</form>
		</div>
		<div style="width: 60%; display: flex;flex-wrap: wrap;justify-content: space-around;">
			 <?php foreach ($gallery as $gallery ): ?>
			 	<div style="width: 19%;margin-bottom: 20px">
			 		<img style="width: 100%;" src="../fotos/<?php echo $gallery['img'] ?>">
			 		<br>
			 		<a style="padding: 10px 30px;background: red;color: white;margin: auto; " href="deletegallery.php?id=<?php echo $gallery['id'];  ?>">DELETE</a>
			 	</div>
			 <?php endforeach ?>
		</div>
	</div>

</body>
</html>