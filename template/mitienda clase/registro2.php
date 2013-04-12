<?php
//rescatamos las variables para el registro 
$nombre=$_GET['nombre'];
$cedula=$_GET['cedula'];
$email=$_GET['email'];
$direccion=$_GET['direccion'];
$username=$_GET['username'];
$clave=$_GET['clave'];
$btnAccion=$_GET['btnAccion'];
// Desarrollar la logica de los botones

	switch($btnAccion){
		case 'Registrar':
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
						  ?>
                            <script>
							 alert('Registro realizado con exito!')
		 					 window.location='index.html'
							
							</script>
							<?
						 

                
							/*?>
                            <script>
							 alert('Disculpe no se pudo realizar su registro!')
		 					 window.location='index.html'
							
							</script>
							<?*/
		//FIN DEL SI
	
	
	
	}//FIN DEL CASE

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:::REGISTRO DE USUARIOS:::.</title>
<link href="css/registro.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/validacion.js"></script>
</head>

<body style="margin: 0 0 0 0;">

<table border="0" style="width:900px" align="center"  >


<tr>	<!--encabezado-->

	<td style="width:150px; height:50px">&nbsp;</td>
    <td valign="bottom" width="750">
    <div style="height:20px" class="encabezado_pagina" align="center">&nbsp;&nbsp;REGISTRO DE USUARIOS</div>
    </td>
</tr>
<tr>
	<td style="width:150px; height:50px">&nbsp;</td>
    <td valign="top" width="750" height="102" class="contenido" ><p>Bienvenido al registro de usuarios, para poder registrarse correctamente por favor complete todas las entradas del formulario... <a href="index.php"></a></p>
    </td>

</tr>

<tr>	<!--formulario de contenido-->
<td colspan="2" align="center">

	<FORM action="registro2.php" method="get" name="registro">
    <fieldset>
    <legend>
    <strong>Mi Tienda C.A </strong>
    </legend>
    <table border="0" cellpadding="0" cellspacing="10" class="contenido" width="700">
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr>
		<td width="150" valign="top" align="right"><b>Nombre del usuario:</b>&nbsp;&nbsp;</td>
		<td width="550" valign="top" align="left" ><a class=Ntooltip><input type="text" name="nombre" value="<? echo $nombre; ?>"size="30" maxlength="8"  /><span>
          *Campo requerido
</span>
</a></td>
    </tr>       
    <tr>
    <tr>
		<td width="150" valign="top" align="right"><b>cedula:</b>&nbsp;&nbsp;</td>
		<td width="550" valign="top" align="left" ><a class=Ntooltip><input type="text" name="cedula" value="<? echo $cedula;?>"  size="30" maxlength="20" />
        <span>
          *Campo requerido</span>
</a></td>
    </tr>
    <tr>
		<td width="150" valign="top" align="right"><b>Email:</b>&nbsp;&nbsp;</td>
		<td width="550" valign="top" align="left" ><a class=Ntooltip><input type="text" name="email" value="<? echo $email; ?>" size="30" maxlength="20">
        <span>
          *Campo requerido</span>
</a>
        &nbsp;</td>
    </tr>

    
		<td width="150" valign="top" align="right"><b>Direccion</b>&nbsp;&nbsp;</td>
		<td width="550" valign="top" align="left" ><a class=Ntooltip><input type="text" name="direccion" value="<? $direccion;?>"  maxlength="50" style="width:450px" /><span>
          *Direccion (campo requerido)
</span>
</a></td>

    </tr>        
    <tr>
		<td width="150" valign="top" align="right"><b>Username</b>&nbsp;&nbsp;</td>
		<td width="550" valign="top" align="left" ><a class=Ntooltip><input type="text" name="username" <? $username;?>  maxlength="50" style="width:450px" /><span>
          *Nombre para iniciar seccion (campo requerido)
</span></a></td>
    </tr>            
    <tr>
		<td width="150" valign="top" align="right"><b>Clave:</b>&nbsp;&nbsp;</td>
		<td width="550" valign="top" align="left" ><a class=Ntooltip><input type="password" name="clave" value="<? $clave;?>" maxlength="15" style="width:150px" /><span>
          *Clave de usuario(campo requerido)
</span></a></td>
    </tr>            
    <tr>
   
    <tr><td colspan="2" style="border-bottom:1px solid #003366">&nbsp;</td></tr>                               
    <tr><td colspan="2" align="right">	

    	<a href="index.html"><input type="button" name="cancelar" value="Cancelar" style="width:150px" src="index.html" /></a>
	    &nbsp;&nbsp;    
    	<input type="submit" name="btnAccion"  value="Registrar"/>  
       
    </td></tr>    
    </table>
    </fieldset>
    </form>

</td>
</tr>
</table>

</body>

</body>
</html>