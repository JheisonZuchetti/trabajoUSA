<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="ct">
		<div class="foto-ct">
			<img src="img/camiseta.jpg">

			
		</div>
		<form class="formulario_f" id="formulario_f" method="post">
			<h1>¿Tienes un modelo especial?</h1>
			<p>Comentanos tus requerimientos ingresando un correo para poder comunicarnos con usted,con gusto le atenderemos en la brevedad</p>
            <div><p id="mensajeExito" class="display">Mensaje Enviado</p></div>
              <div><p id="mensajeError" class="display"></p></div>
             <input type="text" name="nombre" placeholder="Nombre" >
             <input type="mail" name="email" placeholder="Correo " >
             <textarea name="mensaje" cols="4" placeholder="Requerimientos" ></textarea>
             <button class="botonEnviar">Enviar</button>
          </form>
	</div>
    <div class="mp">
    	<h1>Visitanos</h1>
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7803.326538144643!2d-77.01918127724058!3d-12.066673874004644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c89ec2a832cf%3A0x64b6a4e4b20a589d!2sGamarra%2C+La+Victoria+15018!5e0!3m2!1ses!2spe!4v1554924462218!5m2!1ses!2spe" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  <script src="formulario.js"></script>
</body>
</html>