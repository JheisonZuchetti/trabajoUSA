<?php 

   require 'navigation.php';
     require 'conexion.php';
     $index=$conexion->query("SELECT * FROM gym ");

    while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
      
          $a = $rowindex['a'];
          $b = $rowindex['b'];
          $c = $rowindex['c'];
          
          

      }

      $gaevents=$conexion->query("SELECT * FROM ga_events where tipo='gym'  ");

    $rowga=$gaevents->FetchAll(PDO::FETCH_ASSOC);
 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body>
  <form action="savegym.php" method="post">
  <div class="box-gym">
  	  <h1>Gym Rental</h1>
  	  <p><textarea name="a" style="width:100%;height: 100px;"><?php echo $a ?></textarea></p>

  	  <h3>Cost</h3>
  	  <p style="background: #FF9800; padding: 5px 15px;"><textarea name="b" style="width:100%;height: 100px;"><?php echo $b; ?></textarea></p>
  	  

  	  <span style="font-style: oblique;"><textarea name="c" style="width:100%;height: 100px;"><?php echo $c ?></textarea ></span>

  	  

  	  <div class="image">
  	  	 <?php foreach ($rowga as $rowga ): ?>
      <div style="width: 21%">
    <img style="width: 100%" src="../fotos/<?php echo $rowga['img'] ?>">

<a style="padding: 10px 30px;background: red;color: white;margin: auto;width: 50% ;display: block;" href="deleteevents.php?id=<?php echo $rowga['id'];  ?>">DELETE</a>
</div>
  <?php endforeach ?>
  	  </div>
      <a style="padding: 10px 30px;background: #FF9800;color: white;margin: auto;width: 50% ;display: block;" href="photoevents.php">EDIT PHOTO</a>
  </div>
  <input style="padding: 15px; width: 100%;background: #80CD33; margin-top: 20px; border: none;font-size: 1.5rem;color: white;margin-bottom: 20px;cursor: pointer; " type="submit" name="" value="update">
</form>

</body>
</html>