<?php 
 
 error_reporting(-1);
    $error = '';
    $nombre='';
    $ape='';
    $mobile='';
    $company='';
    $email='';
    $mensaje='';
    $cuerpo='';
    //VALIDANDO NOMBRE
    if(empty($_POST["nombre"])){
        $error = 'Insert your  name </br>';
    }else{
        $nombre = $_POST["nombre"];
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //SOLO TE ALMACENA CAMPOS TIPO STRING, LO DEMÁS NO
    }
    if(empty($_POST["ape"])){
        $error = 'Insert your last name </br>';
    }else{
        $ape = $_POST["ape"];
        $ape = filter_var($ape, FILTER_SANITIZE_STRING); //SOLO TE ALMACENA CAMPOS TIPO STRING, LO DEMÁS NO
    }

    if(empty($_POST["mobile"])){
        $error = 'Insert your mobile</br>';
    }else{
        $mobile = $_POST["mobile"];
        $mobile = filter_var($mobile, FILTER_SANITIZE_STRING); //SOLO TE ALMACENA CAMPOS TIPO STRING, LO DEMÁS NO
    }

    if(empty($_POST["company"])){
       
    }else{
        $company = $_POST["company"];
        $company = filter_var($company, FILTER_SANITIZE_STRING); //SOLO TE ALMACENA CAMPOS TIPO STRING, LO DEMÁS NO
    }
    //VALIDANDO EMAIL
    if(empty($_POST["email"])){
        $error .= 'Insert your email</br>';    
    }
    else{
        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error .= 'Ingresa un E-mail verdadero</br>';
        }else{
            $email = filter_var($email, FILTER_SANITIZE_STRING);
        }
    }
    //VALIDANDO MENSAJE
    if(empty($_POST["mensaje"])){
        $error .= 'Insert your message </br>';
    }else{
        $mensaje = $_POST["mensaje"];
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING); //SOLO TE ALMACENA CAMPOS TIPO STRING, LO DEMÁS NO
    }

    //CUERPO DEL MENSAJE

    $cuerpo .= 'NAME: ';
    $cuerpo .= $nombre;
    $cuerpo .= "\r\n";

    $cuerpo .= 'LAST NAME: ';
    $cuerpo .= $ape;
    $cuerpo .= "\r\n";

    $cuerpo .= 'MOBILE: ';
    $cuerpo .= $mobile;
    $cuerpo .= "\r\n";

    $cuerpo .= 'COMPANY: ';
    $cuerpo .= $company;
    $cuerpo .= "\r\n";

    $cuerpo .= 'E-MAIL: ';
    $cuerpo .= $email;
    $cuerpo .= "\r\n";

    $cuerpo .= 'MESSAGE: ';
    $cuerpo .= $mensaje;
    $cuerpo .= "\r\n";

    //DIRECCION
    $enviarA = "jheisonzuchettiarenas@gmail.com";
    $asunto = 'New message';
    $header = "$email";
    //ENVIAR CORREO

    if($error == ''){
        mail( $enviarA, $asunto, $cuerpo,$header); //ALMACENAMOS TODO PARA ENVIAR AL FORMULARIO, MENSAJE ENVIADO O NO
        echo 'exito';
    }else{
        echo $error;
    }

 ?>