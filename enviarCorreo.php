<?php
$destino = "fernando.cesar.serrano1997@gmail.com";

$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$header = "Enviado desde el formulario del portafolio";
$mensajeCompleto = "\n email: " .$email . "\n" . "asunto: " 
            . $asunto . "\n" . "mensaje: " . $mensaje;

mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: index.html');
