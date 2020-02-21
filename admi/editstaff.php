<?php 
session_start();
if (isset($_SESSION['usuario'])) {
     
 
  
} else{
  header('Location:login.php');
}
require 'navigation.php';
     require 'conexion.php';
     
     $id = isset($_GET['id']) ? (String)$_GET['id'] : false;

     $staff=$conexion->query("SELECT * FROM staff where id=$id ");

    while ($rowstaff=$staff->Fetch(PDO::FETCH_ASSOC)) {
    	
          $profe = $rowstaff['profe'];
          $cargo = $rowstaff['cargo'];
          $biblio = $rowstaff['biblio'];
          $id = $rowstaff['id'];
          
      }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div style="padding-top: 130px;">
    	 
    	 <form style="display: flex;flex-direction: column;" action="saveperfil.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        
    	 	<input style="margin-bottom: 15px;
" type="text" name="name" value="<?php echo $profe ?>">
<input style="margin-bottom: 15px;
" type="text" name="cargo" value="<?php echo $cargo ?>">
    	 	<textarea style="margin-bottom: 15px;height: 300px;" name="biblio"><?php echo $biblio ?></textarea>
    	 	<label style="padding: 20px;">Edit Photo</label>
            <input style="padding: 20px;" type="file" name="foto">

            <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
    	 </form>

    </div>
</body>
</html>