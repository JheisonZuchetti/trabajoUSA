<?php 
  require 'views/menu.php';
 require 'admi/conexion.php';
$index=$conexion->query("SELECT * FROM empleo ");

while ($rowindex=$index->Fetch(PDO::FETCH_ASSOC)) {
  
      $texto = $rowindex['texto'];
      
      
      

  }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
 <div class="a">
 	 	<form class="formulario_f" id="formulario" method="post">
			<h1 class="emp">Employment Opportunities
</h1>
			<h4>Current Employment Opportunities</h4>

            <p><?php echo nl2br($texto); ?></p>
            
             <input type="text" name="nombre" placeholder="First Name"  required="" >
             <input type="text" name="ape" placeholder="Last Name" required="" >
             <input type="text" name="mobile" placeholder="Mobile Phone" required="" >
             <input type="mail" name="email" placeholder="Email" required="" >
             <input type="text" name="adress1" placeholder="Address Line 1:"  required="">
             <input type="text" name="adress2" placeholder="Address Line 2:" >
             <input type="text" name="city" placeholder="City" required="" >
             <input type="text" name="state" placeholder="State/Province:" required="" >
             <input type="text" name="zip" placeholder="Zip/Postal Code: 
" required="" >
             
             <textarea name="mensaje" cols="4" placeholder="Message"  required=""></textarea>
             <button class="botonEnviar">Send</button>
             <div class="ex"><p id="mensajeExito" class="display">Your message has been successfully submitted</p></div>
              <div class="ex" ><p id="mensajeError" class="display"></p></div>
             
          </form>
         
 	 </div>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="employment.js"></script>
</body>
</html>
<?php require 'views/footer.php'; ?>