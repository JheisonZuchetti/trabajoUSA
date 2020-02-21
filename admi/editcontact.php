<?php 
require 'navigation.php';
require 'conexion.php';
$index=$conexion->query("SELECT * FROM contacto ");

while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
  
      $texto = $rowindex['texto'];
      
      
      

  }


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
	<div class="contact-us">
		  <form action="savecontact.php" method="post">
            <textarea style=" width:100%; height:200px; " name="texto" id="" ><?php echo $texto ;?></textarea>
            <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
          </form>
		 
		
	</div>

</body>
</html>
<?php 
  require '../contact.php';

?>