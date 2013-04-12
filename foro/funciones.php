<?php
function mostrarTemplate($tema, $variables)
{
	//var_dump($variables);
	extract($variables);
	eval("?>".$tema."<?");
}

function parsearTags($mensaje)
{
	$mensaje = str_replace("[Resp]", "<blockquote><hr width='100%' size='2'>", $mensaje);
	$mensaje = str_replace("[/Resp]", "<hr width='100%' size='2'></blockquote>", $mensaje);
	return $mensaje;
}
?>