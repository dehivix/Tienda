<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mi Tienda C.A</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
<script type="text/javascript" src="../js/ingreso.js"></script>
</head>
<body>

<div id="wrap">

<div id="header">
<h1 align="center">Sistema de Compras</h1>
<h2 align="center">&quot;Debes ser usuario activo para poder comprar&quot;</h2>
<p>&nbsp;</p>
<p>&nbsp;		</p>
<div id="header">
<a href="../cerrar.php">
<h3 align="right">Cerrar</h3></a> </div>
</div>

<div id="menu">
<ul>
<li><a href="../index.html">Inicio</a></li>
<li><a href="../registro.php">Registrate</a></li>
<li><a href="login.php">Realizar compras</a></li>
<li><a href="../foro/indexforo2.php">Foro</a></li>
<li><a href="../../../fpdf/catalago/catalogo.php">Descargar Catalogo</a></li>
</ul>
</div>
<div id="content">
<table width="10" height="50" border="0"  align="center" style="width:600px"  >
    <tr> </tr>
    <tr>
      <!--formulario de contenido-->
      <td colspan="20" align="center">
	  <FORM method="post" action="./index.php" >          
            <table border="0" cellpadding="0" cellspacing="10" class="contenido" width="361">
            <tr>
              <td width="145" valign="top" align="right"><b>Usuario:</b></td>
              <td width="186" valign="top" align="left" ><a class=Ntooltip>
                <input type="text" name="username" size="30" maxlength="20"  />
                <span> *Campo requerido </span> </a></td>
            </tr>
            <tr>
              <td width="145" valign="top" align="right"><b>Clave:</b></td>
              <td width="186" valign="top" align="left" ><a class=Ntooltip>
                <input type="password" name="password"  size="30" maxlength="10" />
                <span> *Campo requerido</span> </a></td>
            </tr>
			<tr>
                <td height="24" colspan="2" align="right"><a href="../index.html">
                   <input type="button" name="cancelar" value="Cancelar" style="width:100px" src="../index.html" />
                  </a> &nbsp;&nbsp;
                  
				  <input type="submit"  value="Logear" style="width:100px" />
                </td>
              </tr>
          </table>
       </form>
	   </td>
    </tr>
  </table>
</div>
<div id="footer">
Diseñado por: <a href="#">J.E.D</a>; Agradecimientos a: <a href="#">Dehivis Perez</a>
</div>

</div>

</body>
</html>
