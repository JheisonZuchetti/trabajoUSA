<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stile.css">
</head>
<body>
 <div class="a">
 	 	<form class="formulario_f" id="formulario_f" method="post">
			<h1>Contact Us</h1>
			
            
             <input type="text" name="nombre" placeholder="Name"  required="">
             <input type="text" name="ape" placeholder="Last Name" required="" >
             <input type="text" name="mobile" placeholder="Mobile Phone" required="" >
             <input type="mail" name="email" placeholder="Email" required="" >
             <input type="text" name="company" placeholder="Company"  >
             
             <textarea name="mensaje" cols="4" placeholder="Message" ></textarea>
             <button class="botonEnviar">Send</button>
             <div class="ex"><p id="mensajeExito" class="display">Your message has been successfully submitted</p></div>
              <div class="ex" ><p id="mensajeError" class="display"></p></div>
             
          </form>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.2190471384974!2d-87.67219558460513!3d40.38183757936921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880d65c5cc213087%3A0xbf182f929eb3affe!2s351+N+Chicago+St%2C+Rossville%2C+IL+60963%2C+USA!5e0!3m2!1sen!2spe!4v1565374241616!5m2!1sen!2spe" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 	 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="formulario.js"></script>
</body>
</html>