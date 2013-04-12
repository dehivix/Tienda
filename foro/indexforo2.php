<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mi Tienda C.A</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1 align="center">Foro de Mi Tienda C.A</h1>
<h2 align="center">&quot;Comunicate, Comparte y Aprende&quot;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="header">
<h3 align="right"><a href="respuesta.php">Nuevo Tema|</a><a href="../cerrar.php">|Salir del Foro&nbsp;</h3></div>
</div>

<div id="menu">
<ul>
<li><a href="../index.html">Inicio</a></li>
<li><a href="../registro.php">Registrate</a></li>
<li><a href="../compras/login.php">Realizar compras</a></li>
<li><a href="indexforo2.php">Foro</a></li>
<li><a href="../../../fpdf/catalago/catalogo.php">Descargar Catalogo</a></li>
</ul>
</div>
<div id="content">
<table border="0" style="width:740px" align="center" bordercolor="#0066FF">
<tr><td height="45"><p><strong><a href="../cerrar.php"></a></strong></p>
  <p align="right"><strong>&nbsp;&nbsp;</strong></p>
  </td></tr>
         

<tr><td>

    <table align="center" border="0" style="width:990" cellpadding="0" cellspacing="0" class="tool_buttons" >    
    <tr><!--listado de temas-->
    
        <td style="width:990px; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #333; font-weight: bold; text-align: left;" valign="middle">
        
			<?php
				require('configuracion.php');
				require('funciones.php');
				
				/* Pedimos todos los temas iniciales (identificador==0)
				* y los ordenamos por ult_respuesta */
				$sql = "SELECT id, autor, titulo, fecha, respuestas, ult_respuesta ";
				$sql.= "FROM foro WHERE identificador=0 ORDER BY ult_respuesta DESC";
				$rs = mysql_query($sql, $con);
				if(mysql_num_rows($rs)>0)
				{
					// Leemos el contenido de la plantilla de temas
					$template = implode("", file("temasprueba.html"));
					include('tituloprueba.html');
					while($row = mysql_fetch_assoc($rs))
					{
						
						mostrarTemplate($template, $row);
					}
				}
						
			?>


		  
		  
	    </td>
          
</table>  
</td></tr>
</table>

<div style="clear: both;"> </div>
</div>
<div id="footer">
Diseñado por: <a href="#">J.E.D</a>; Agradecimientos a: <a href="#">Dehivis Perez</a>
</div>
</div>
</body>
</html>
