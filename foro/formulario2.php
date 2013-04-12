<?php
//rescatamos las variables 
$autor=$_POST['autor'];
$tema=$_POST['tema'];
$descripcion=$_POST['descripcion'];
$btnAccion=$_POST['btnAccion'];

switch($btnAccion){
                  case 'Enviar Tema':
				  
				  $conectar=mysql_connect('localhost','root', '');
                        //2.Asignar base de datos
                        $bd='foro_curso';
                        //3.Asignar consulta (QUERY) SQL
   
   										
                        $sql="INSERT INTO foro VALUES(
                            '$autor',
                            '$tema',
                            '$descripcion')";
						
						

                        //4.Ejecutar Consulta
                        $resultado=mysql_db_query($bd,$sql);
                         //5.Mostrar Posibles Error
                          echo " ".mysql_error();	
						  
						  ?>
                          
                          <script>
          alert('datos enviados')
		  window.location='foro.php'
          
      </script>
				<?php					  
}

//guardamos



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mi Tienda C.A</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<script type="text/javascript" src="../js/validacion.js"></script>
</head>
<body>

<div id="wrap">

<div id="header">
<h1 align="center">Foro de Mi Tienda C.A</h1>
<h2 align="center">&quot;Comunicate, Comparte y Aprende&quot;</h2>
<div id="header">
<a href="">
<h3 align="right"></h3></a> </div>
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
<div class="left"> 
<table border="0" style="width:900px" align="center"  >


<tr>	<!--encabezado-->

	<td style="width:150px; height:50px">&nbsp;</td>
    <td valign="bottom" width="750">&nbsp;</td>
</tr>
</table>
<td width="802" valign="top" style="width:750px; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #333; font-weight: bold; text-align: left;" ><table width="720"  align="left" border="0" cellspacing="2" cellpadding="2">
<form name="f" action="agregar.php" method="post">
    <input type="hidden" name="identificador" value="<?=$id?>">
    <tr> 
      <td width="30%" align="right">Autor </td>
      <td><input type="text" name="autor"></td>
    </tr>
    <tr> 
      <td width="30%" align="right">Titulo</td>
      <td><input type="text" name="titulo" value="<?=$titulo?>"></td>
    </tr>
    <tr> 
      <td width="30%" align="right">Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5"><?=$mensaje?></textarea></td>
    </tr>
    <tr> 
      <td colspan="2" align="center"><input type="submit" name="Submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>		  </td>
          
        
        <!--area de creacion de nuevos temas-->
        </tr>
    </table>
    
</td></tr>
</table>

<h2 align="center">&nbsp;</h2>
</div>

<div style="clear: both;"> </div>

</div>

<div id="footer">
Diseñado por: <a href="#">J.E.D</a>; Agradecimientos a: <a href="#">Dehivis Perez</a>
</div>

</div>

</body>
</html>
