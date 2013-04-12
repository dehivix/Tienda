<?php
session_start();
include('mysql.php');

$baseDatos = new MySQL();

?>
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
<h1 align="center">Bienvenido a Mi Tienda C.A</h1>
<h2 align="center">&quot;Un lugar para comprar lo que quieras&quot;</h2>
<div id="header">
<a href="">
<h3 align="right"></h3></a> </div>
</div>

<div id="menu" align="center">
<ul>
<li><a href="../index.html">Inicio</a></li>
<li><a href="../registro.php">Registrate</a></li>
<li><a href="login.php">Realizar compras</a></li>
<li><a href="../foro/indexforo2.php">Foro</a></li>
<li><a href="../../../fpdf/catalago/catalogo.php">Descargar Catalogo</a></li>
</ul>
</div>

<div id="content" align="center">
<table width="100" height="150" border="0">
<?php

$sql = "SELECT * FROM articulos WHERE id<=12 ORDER BY id ASC";
$resulset = mysql_query($sql);

while($producto = mysql_fetch_array($resulset)){
//echo $producto['id'];
?>

<div>
  <td>	
   <img src="./img/<?= $producto['id'] ?>.jpg" alt="<?= $producto['id'] ?>" width="235" height="150" style="border: 3px solid #ccc" />
  </td>
  <br/>
</div>

<div>
<tr>
<td>
<fieldset style="width:235px;height:150;border: 3px solid #ccc">
  <b><?= $producto['nombre'] ?>:</b> <?= $producto['descripcion'] ?>
  <div>
  Precio: <?= $producto['precio'] ?>
</div>
<a href="doCompra.php?id=<?= $producto['nombre'] ?>">Comprar</a>
<br/>
</fieldset> 
</td>
</tr>  
<?php
}
?>
  </table>
<br/>


<div style="clear: both;"> </div>

</div>

<div id="footer">
Diseñado por: <a href="#">J.E.D</a>; Agradecimientos a: <a href="#">Dehivis Perez</a>
</div>

</div>

</body>
</html>