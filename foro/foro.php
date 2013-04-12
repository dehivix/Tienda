<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mi Tienda C.A</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
-->
</style>
</head>
<body>

<div id="wrap">

<div id="header">
<h1 align="center">Foro de Mi Tienda C.A</h1>
<h2 align="center">&quot;Comunicate, Comparte y Aprende&quot;</h2>
<p>&nbsp;</p>
<p>&nbsp;		</p>
<div id="header">
<a href="">
<h3 align="right"><a href="../cerrar.php">Salir de foro&nbsp;</h3></div>
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

    <table align="center" border="0" style="width:740" cellpadding="0" cellspacing="0" class="tool_buttons" >    
    <tr><!--listado de temas-->
    
        <td style="width:740px; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #333; font-weight: bold; text-align: left;" valign="middle">
<?php
require('configuracion.php');
require('funciones.php');
$id = $_GET["id"];
if(empty($id));// Header("Location: indexforo.php");

$sql = "SELECT id, autor, titulo, mensaje, ";
$sql.= "DATE_FORMAT(fecha, '%d/%m/%Y %H:%i:%s') as enviado FROM foro ";
$sql.= "WHERE id='$id' OR identificador='$id' ORDER BY fecha ASC";
$rs = mysql_query($sql, $con);

if(mysql_num_rows($rs)>0)
{
	include('titulos_post.html');
	$template = implode("", file('post.html'));
	while($row = mysql_fetch_assoc($rs))
	{
		
		$row["mensaje"] = nl2br($row["mensaje"]);
		$row["mensaje"] = parsearTags($row["mensaje"]);
		mostrarTemplate($template, $row);
	}
}
//include('footer.html');
?>


		  
		  
	    
          
        
        <!--area de creacion de nuevos temas
        <td style="width:40px; height:30px; border-left:2px dotted #999999" valign="bottom" align="center" ><div class="right">
          <h2 align="center">...:Opciones:...</h2>
          <ul>
            <li>
              <div align="center"><a href="indexforo.php">*Inicio</a></div>
            </li>
            <li>
              <div align="center"><a href="respuesta.php">*Nuevo tema</a></div>
            </li>
            <li></li>
            </ul>
          </div></td>
    </tr>-->
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







