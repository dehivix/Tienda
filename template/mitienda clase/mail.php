<?
$destino = $_POST["email"];
$asunto = "Este es un mensaje de felicitacion";
$mensaje = "<center>América y ya</center><br/><p>Nos vamos a la Libertadores</p><br/><h1>América para los americanistas</h1>";
$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html;
charset=iso-8859-1";

if(!mail($destino, $asunto, $mensaje, $encabezados)){
  echo "el correo fue enviado";
}else{
  echo "el correo no se envio";
}


?> 

