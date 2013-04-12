<?php
//rescatamos las variables para el registro 
error_reporting(0);
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$username=$_POST['username'];
$clave=$_POST['clave'];
$Envio_c=$_POST['Envio'];
// Desarrollar la logica de los botones

	switch($Envio_c){
		case 'registrar':
						//1. Conectar con mysql
                        $conectar=mysql_connect('localhost','root', '');
                        //2.Asignar base de datos
                        $bd='curso_php';                       					
						              
                        $sql="INSERT INTO usuarios VALUES( 
                            '$nombre',
                            '$cedula',
							'$email',
                            '$direccion',
                            '$username',
                            '$clave')";

                        //4.Ejecutar Consulta
                        $resultado=mysql_db_query($bd,$sql);
                         //5.Mostrar Posibles Error
                          echo " ".mysql_error();		 
	}//FIN DEL CASE

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi Tienda C.A</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/validacion.js"></script>
</head>
<body>

<div id="wrap">

<div id="header">
<h1 align="center">Registro de Usuarios</h1>
<h2 align="center">&quot;Completa todas las entradas para que tu registro sea  exitoso&quot;</h2>
<div id="header">
<a href="">
<h3 align="right"></h3></a> </div>
</div>

<div id="menu">
<ul>
<li><a href="index.html">Inicio</a></li>
<li><a href="registro.php">Registrate</a></li>
<li><a href="compras/login.php">Realizar compras</a></li>
<li><a href="foro/indexforo2.php">Foro</a></li>
<li><a href="../../fpdf/catalago/catalogo.php">Descargar Catalogo</a></li>
</ul>
</div>

<div id="content">
<div> 
<table width="10" height="50" border="0"  align="center" style="width:600px"  >
    <tr>   
      <!--formulario de contenido-->
      <td colspan="20" align="center">
	  <FORM action="<? echo $PHP_SELF; ?>" method="post" name="registro">          
            <table border="0" cellpadding="0" cellspacing="10" class="contenido" width="361">
            <tr>
              <td width="145" valign="top" align="right"><b>Nombre del usuario:</b></td>
              <td width="186" valign="top" align="left" ><a class=Ntooltip>
                <input type="text" name="nombre" value="<? echo $nombre; ?>"size="30" maxlength="20"  />
                <span> *Campo requerido </span> </a></td>
            </tr>
            <tr>
              <td width="145" valign="top" align="right"><b>Cedula:</b></td>
              <td width="186" valign="top" align="left" ><a class=Ntooltip>
                <input type="text" name="cedula" value="<? echo $cedula;?>"  size="30" maxlength="10" />
                <span> *Campo requerido</span> </a></td>
            </tr>
            <tr>
              <td width="145" valign="top" align="right"><b>Email:</b></td>
              <td width="186" valign="top" align="left" ><a class=Ntooltip>
                <input type="text" name="email" value="<? echo $email; ?>" size="30" maxlength="20" />
                <span> *Campo requerido</span> </a> &nbsp;</td>
            </tr>
              <td width="145" valign="top" align="right"><b>Direccion</b></td>
              <td width="186" valign="top" align="left" ><a class=Ntooltip>
                <input type="text" name="direccion" value="<? $direccion;?>" size="30" maxlength="50"/>
                <span> *Direccion (campo requerido) </span> </a></td>
              </tr>
              <tr>
                <td width="145" valign="top" align="right"><b>Username</b></td>
                <td width="186" valign="top" align="left" ><a class=Ntooltip>
                  <input type="text" name="username" value="<? $username;?>" size="30" maxlength="30"/>
                  <span> *Nombre para iniciar seccion (campo requerido) </span></a></td>
              </tr>
              <tr>
                <td width="145" valign="top" align="right"><b>Clave:</b></td>
                <td width="186" valign="top" align="left" ><a class=Ntooltip>
                  <input type="password" name="clave" value="<? $clave;?>" size="30" maxlength="15"/>
                  <span> *Clave de usuario(campo requerido) </span></a></td>
              </tr>
              <tr> </tr>
              <tr>
               
              </tr>
              <tr>
                <td height="24" colspan="2" align="right"><a href="index.html">
                   <input type="button" name="cancelar" value="Cancelar" style="width:100px" src="index.html" />
                  </a> &nbsp;&nbsp;
                  
				  <input type="submit" name="Envio"  value="registrar" style="width:100px" onClick="return formulario();" />
                </td>
              </tr>
          </table>
		</form>
	  </td>
    </tr>
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