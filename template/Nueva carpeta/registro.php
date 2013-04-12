<?
//Inicio del php
	//Procedemos a rescatar las variables 
	$txtUsuario=$_GET['txtUsuario'];
	$txtCedula=$_GET['txtCedula'];
	$txtNombre=$_GET['txtNombres'];
	$txtApellidos=$_GET['txtApellidos'];
	$optSexo=$_GET['optSexo'];
	$txtEdad=$_GET['txtEdad'];
	$cmbDia=$_GET['cmbDia'];
	$cmbMes=$_GET['cmbMes'];
	$txtAño=$_GET['txtAño'];
	$txtDireccion=$_GET['txtDireccion'];
	$txtTelefono=$_GET['txtTelefono'];
	$txtCelular=$_GET['txtCelular'];
	$txtClave=$_GET['txtClave'];
	$txtConfirmarclave=$_GET['txtConfirmarclave'];
	$btnAccion=$_GET['btnAccion'];
	
	//Logica de boton registrar
	
	switch($btnAccion){
		
		case 'Registrar':
		
		//1. Conectar con mysql
                        $conectar=mysql_connect('localhost','root', '');
                        //2.Asignar base de datos
                        $bd='salem';
                        //3.Asignar consulta (QUERY) SQL
                        $fechNac=$txtAño.'-'.$cmbMes.'-'.$cmbDia;
						
                        $sql="INSERT INTO usuarios VALUES(
                            '$txtUsuario',
							'$txtCedula',
							'$txtNombre',
                            '$txtApellidos',
                            '$optSexo',
							'$txtEdad',
                            '$fechNac',
                            '$txtDireccion',
                            '$txtTelefono',
                            '$txtCelular',
                            '$txtClave')";

                        //4.Ejecutar Consulta
                        $resultado=mysql_db_query($bd,$sql);
                         //5.Mostrar Posibles Error
                          echo " ".mysql_error();
						  
						  if($txtUsuario==''){
							  $mensaje="<font size=\"1\" color=\"#FF0000\"><strong>".'Inserte Usuario'."</strong></font><br />\n";
							  
						  }
						 



                  break;
				  
	}
	if($btnAccion=='Limpiar'){
                      

                          $txtUsuario='';
						  $txtCedula='';
                          $txtNombres='';
                          $txtApellidos='';
                          $optSexo='';
						  $txtEdad='';
                          $cmbDia=0;
                          $cmbMes=0;
                          $txtAño='';
                          $txtDireccion='';
                          $txtTelefono='';
                          $txtCelular='';
                          $txtClave='';
                          $txtConfirmarclave='';
                      }
				   



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Usuario</title>
<link href="css/bienvenida.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript" type="application/javascript">

 function formulario(){
    //valido el Usuario
    if (document.frmRegistro.txtUsuario.value.length==0){
       alert("Introduce nombre de Usuario")
       document.frmRegistro.txtUsuario.focus()
       return false;
    }
    //validamos el numero de cedula
    if (document.frmRegistro.txtCedula.value.length==0){
       alert("Introduce tu Cedula")
       document.frmRegistro.txtCedula.focus()
       return false;
	  	   
    }
	
    if (document.frmRegistro.txtNombres.value.length==0){
       alert("Introduzca su Nombre")
       document.frmRegistro.txtNombres.focus()
       return false;
       }
       //validamos el apellido de la persona
    if (document.frmRegistro.txtApellidos.value.length==0){
       alert("Introduzca su Apellido")
       document.frmRegistro.txtApellidos.focus()
       return false;
	}
	
	//Validamos la edad
	/*if (document.frmRegistro.txtEdad.value==0){
		alert("Introduzca Edad")
		document.frmRegistro.txtEdad.focus()
		return false;
	}*/


    //el formulario se envia
    alert("¡Muchas gracias por enviar el formulario,\n Ha sido registrado sastifactoriamente!");
    document.frmRegistro.submit();

}


</script>

</head>

<body>
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TR>
            <TD>

            <TABLE border="0" cellpadding="0" cellspacing="0" width="100%" >
                <TR>
                    <TD width="209" height="87" class="contenedor-header">&nbsp;</TD>
                    <TD width="788" height="83"  bgcolor="#0B3A8B" class="contenedor-header">&nbsp;</TD>
                    <TD width="1" height="83" class="contenedor-header"></TD>

                </TR>
            </TABLE>
            </TD>
        </TR>
        <TR>
            <TD>
            <TABLE border="0" cellpadding="0" cellspacing="0" width="100%" class="header-barra1">
                
                    <TR>

                        <TD align="right" valign="middle">
                        <TABLE border="0" cellpadding="0" cellspacing="0" class="header-barra1-text">
                            <TR>
                                
                                <TD><span class="header-barra1-text"><strong><a href="index.php"><img src="images/volver.jpg" width="23" height="21" border="0" />Volver al Principal</a></strong></span></A></TD>
                                
                            </TR>
                        </TABLE>

                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
            </TD>
        </TR>
        <TR>
            <TD align="left" valign="middle" class="header-barra2">
            

                        <TABLE border="0" cellspacing="0" cellpadding="0"
                            class="header-barra2-text">

                            <TR>
                                
                            <TD class="header-barra1-strong-text" colspan="4"><STRONG>Sistema de Control</STRONG></TD>
                        </TR>
                        </TABLE></TD>
        </TR>
        
        <TR>
            <TD align="left" valign="top">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                <TR>
                    <TD align="left" valign="top">
                    <TABLE width="760" height="315" border="0" align="center" cellpadding="0" cellspacing="0">
        <TR>

          <TD align="center" valign="middle" class="pageBackGround" >
                            <P class="dialogText" align="center">&nbsp;</P>
                            <P class="dialogText" align="center">&nbsp;</P>
                            <P class="dialogText" align="center">&nbsp;</P>
                            <P align="center" class="dialogText">Bienvenidos al Sistema El sueño de un Anciano<BR>
  Por Favor Ingrese los datos solicitados para conectarse</span>.</P>
                            <form action="<? echo $PHP_SELF; ?>" name="frmRegistro" method="get">
                            <CENTER>
                            <TABLE width="573" height="150" border="0" cellpadding="0"
                                cellspacing="2" class="formTable">

                                <TR>

                      <TD colspan="4" align="center" class="pageHeader">                      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                        <TR>
                          <TD width="3" height="24"></TD>
                          <TD width="100%" height="24" align="center" class="dialogTitle">Acceso al Sistema</TD>
                          <TD width="3" height="24"></TD>
                        </TR>
                      </TABLE></TD>
                    </TR>       
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Inserte nombre de Usuario:</STRONG></TD>
                                    <TD align="left" width="278">
                                    <a class="tooltip" href="#"><input type="text" name="txtUsuario" value="<? echo $txtUsuario;?>"  size="30" maxlength="50" /><span>Campo Requerido.</span></a><br /><? echo $mensaje; ?>

                                  </TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Nº Cedula:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtCedula" value="<? echo $txtCedula; ?>"size="30" maxlength="8" /><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Nombres:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtNombres" value="<? echo $txtNombres;?>"  size="30" maxlength="50" /><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Apellidos:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtApellidos" value="<? echo $txtApellidos;?> " size="30" maxlength="50" /><span>Campo Requerido.</span></a>
                                   
		</TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Sexo:</STRONG></TD>
                                    <TD align="left" width="278">
                                    <input type="radio" name="optSexo" value="F"<? echo ($optSexo=='F'?'checked':''); ?> checked/>F
                                    <input type="radio" name="optSexo" value="M"<? echo ($optSexo=='M'?'checked':''); ?>/>M</TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Edad:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtEdad" value="<? echo $txtEdad;?> " size="30" maxlength="100" /><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR>
                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Fecha de Naciemiento:</STRONG></TD>
                                    <TD align="left" width="278"><!--Esto es como un combo box de visual basic o cualquier lenguaje-->
                                        <select name="cmbDia" size="1">
                                        <option value="0">dd</option>
                                                  <?
                                                    for($d=1;$d<=31;$d++){
                                                       if($cmbDia==$d){ 
                                                        $s='selected';
                                                        }else{
                                                        $s='';
                                                        }
                                                        echo "<option value=\"$d\" $s>$d</option><br />\n";
                                                    }
                                                   ?>
                                        </select>

                                    <!--Esto es para el mes, tambien funciona para otras funciones de selccion de numeros-->
                                    /
                                        <select name="cmbMes" size="1">
                                        <option value="0">mm</option>
                                            <?
                                                for($m=1;$m<=12;$m++){
                                                    if($cmbMes==$m){
                                                    $s='selected';
                                                    }else{
                                                    $s='';
                                                    }
                                                    echo "<option value=\"$m\" $s>$m</option><br />\n";
                                                }
                                            ?>

                                        </select>
                                        /
                                        <input type="text" name="txtAño" value="<? echo $txtAño; ?>" size="4" maxlength="4" />
                                    </TD>
                                </TR>
                                
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Direccion de Habitaci&oacute;n:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtDireccion" value="<? echo $txtDireccion;?> " size="30" maxlength="100" /><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Tlf casa:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtTelefono" value="<? echo $txtTelefono;?> " size="30" maxlength="30" /><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR>

                                    <TD align="right" class="dialogLabel" width="228"><STRONG>Tlf Celular:</STRONG></TD>
                                    <TD align="left" width="278"><a class="tooltip" href="#"><input type="text" name="txtCelular" value="<? echo $txtCelular;?> " size="30" maxlength="30" /><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR align="left">
                                    <TD class="dialogLabel" align="right" valign="top" width="228">
                                    <STRONG>Inserte Clave: </STRONG></TD>
                                    <TD width="278"><a class="tooltip" href="#"><input type="password" name="txtClave" value="<? echo $txtClave; ?>" size="30" maxlength="20"><span>Campo Requerido.</span></a></TD>
                                </TR>
                                <TR align="left">
                                    <TD class="dialogLabel" align="right" valign="top" width="228">
                                    <STRONG>Confirmar Clave: </STRONG></TD>
                                    <TD width="278"><a class="tooltip" href="#"><input type="password" name="txtConfirmarclave" value="<? echo $txtConfirmarclave; ?>"  size="30" maxlength="20"><span>Campo Requerido.</span></a></TD>
                                </TR>

                                <TR align="center" valign="top">
                                    <TD height="38" width="228">&nbsp;</TD>
                                    <TD align="left" height="38" valign="middle" width="278">
                                    <INPUT type="submit" name="btnAccion"value="Registrar" onclick="return formulario()" /> &nbsp;&nbsp;
                                    <a href="index.php"><INPUT name="btnAccion"value="Cancelar" type="submit">&nbsp;&nbsp;</a>
                                    <input name="btnAccion"value="Limpiar" type="submit" />
                                    </TD>
                                </TR>
                            </TABLE>
                            </CENTER>

                            </FORM>
                </TD>

        </TR>
      </TABLE>
                    </TD>
                </TR>
            </TABLE>
            </TD>
        </TR>
        <TR>
            <TD align="center" valign="middle" class="footer">

            <P>&nbsp;</P>
            <HR>
            <TABLE border="0" cellpadding="0" cellspacing="0" class="footer-text">
                <TR>
                    <TD><span  class="footer-text">Políticas de Uso</span> | <span  class="footer-text">Condiciones
                    Generales de Uso</span> | <span  class="footer-text">Términos Legales</span></TD>

                </TR>
            </TABLE>
            </TD>
        </TR>
    </TABLE>
</body>
</html>