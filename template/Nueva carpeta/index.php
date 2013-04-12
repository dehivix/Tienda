<? 
//El codigo php comienza aqui
//Seccion
session_start();
	//rescatamos las variables php
	$txtUsuario=$_POST['txtUsuario'];
	$txtClave=$_POST['txtClave'];
	$btnAceptar=$_POST['btnAceptar'];
	//fin de las variables utilizadas hasta ahora
	//Comenzamos con la lógica de Acciones
	
	if($btnAceptar=='Aceptar'){
  //verificar lo datos
  //1. Conectar con mysql
  $conectar=mysql_connect('localhost','root', '');
  //2.Asignar base de datos
  $bd='salem';
  //3.Asignar consulta (QUERY) SQL

  $sql="SELECT *FROM usuarios WHERE USUARIO='$txtUsuario' AND clave='$txtClave'";

  //4.Ejecutar Consulta
  $resultado=mysql_db_query($bd,$sql);
  //5.Mostrar Posibles Error
  echo "".mysql_error();

  //6. VER SI LO ENCONTRO

   if(mysql_num_rows($resultado)>0){

      $registro=mysql_fetch_array($resultado);
      //variables de control de sección
      $_SESSION['activa']=1;
      $_SESSION['completo']=$registro[2].", ".$registro[1];
      ?>
      <script>
          alert('Bienvenido al sistema')
		  window.location='index.html'
          
      </script>
      <?

  }else{
  ?>

  <script>
          //alert('Usuario no existe o no autorizado')

      </script>

  <?
  $mensaje="<font size=\"2\" color=\"#FF0000\"><strong>".'Clave invalida o Usuario no existe'."</strong></font><br />\n";
  }
}

?>
	



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ancianato</title>
<link href="css/bienvenida.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TR>
            <TD>

            <TABLE border="0" cellpadding="0" cellspacing="0" width="100%" >
                <TR>
                    <TD width="626px" height="87" class="contenedor-header"> 
                  </TD>
                    <TD  bgcolor="#0B3A8B" height="83" class="contenedor-header">&nbsp;</TD>
                    <TD width="236px" height="83" class="contenedor-header"> 
                  </TD>

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
                                
                                <TD><span class="header-barra1-text"><strong><a href="registro.php"><img src="images/registrate.png" width="25" height="25" border="0" />  Registro de Usuario</a></strong></span></A></TD>
                                
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

          <TD align="center" valign="middle" class="pageBackGround">
                                                <P class="dialogText" align="center">Bienvenidos al Sistema El sueño de un Anciano <BR>
                            Por Favor Ingrese los datos solicitados para conectarse.                            </P>
                                                <P class="dialogText" align="center"><img src="images/user_64.png" width="76" height="81" /></P>
                            <FORM action="<? echo $PHP_SELF; ?>"  name="frmEntrada" method="post">
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
                                    <TD align="left" width="278"><input type="text" name="txtUsuario"  size="30" maxlength="30" /></TD>
                                </TR>
                                <TR align="left">
                                    <TD class="dialogLabel" align="right" valign="top" width="228">
                                    <STRONG>Inserte Clave: </STRONG></TD>
                                    <TD width="278"><input type="password" name="txtClave" size="30" maxlength="20"></TD>
                                </TR>

                                <TR align="center" valign="top">
                                    <TD height="38" width="228">&nbsp;</TD>
                                    <TD align="left" height="38" valign="middle" width="278">
                                    <input type="submit" name="btnAceptar" value="Aceptar" /> &nbsp;&nbsp;<br />
                                    <? echo $mensaje; ?>
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