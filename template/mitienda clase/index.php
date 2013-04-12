<?php
  session_start();
  include('mysql.php');
  $db = new Mysql();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mi Tienda C.A</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href=".../css/style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1 align="center">Bienvenido a Mi Tienda C.A</h1>
<h2 align="center">&quot;Un lugar para comprar lo que quieras&quot;</h2>
<p>&nbsp;</p>
<p>&nbsp;		</p>
<div id="header">
<a href="">
<h3 align="right">Cerrar seccion</h3></a> </div>
</div>

<div id="menu">
<ul>
<li><a href="../index.html">Inicio</a></li>
<li><a href="../registro.php">Registrate</a></li>
<li><a href="login.php">Realizar compras</a></li>
<li><a href="#">Productos</a></li>
<li><a href="../foro/indexforo2.php">Foro</a></li>
<li><a href="#">Descargar Catalogo</a></li>
</ul>
</div>
<div id="content">

<?php
  if(!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $consulta = "SELECT username, clave, email FROM usuarios WHERE username='$username' AND clave='$password'";

    $resultado = mysql_query($consulta);// $db->consulta($consulta);
    
    $vector = mysql_num_rows($resultado);// $db->cuenta_filas($resultado);

    //echo $vector;
    echo "<pre>";
      //print_r($vector);
    echo "</pre>";
    //echo "El nombre de usuario es: ".$vector['username'];//$vector[0];
    if($vector){
      $entrada = true;
    $vector = mysql_fetch_array($resultado);
    $db_username = $vector['username'];
    $db_clave = $vector['clave'];
    $db_email = $vector['email'];
    }else{
      $entrada= false;
    }
    //$cedula = 16326344;
    //$db->borrar_usuario($cedula);

    if($entrada){
      echo "<h3>BIENVENIDO A MI TIENDA ".strtoupper($db_username)." </h3>";
      echo "<h4>Estos son los datos de tu registro: </h4>";
      echo "Nombre de usuario: ".$db_username."<br/>";
      echo "Correo de usuario: ".$db_email."<br/>";
      $_SESSION['username'] = $db_username;
  }else{
      echo "<h4>Los datos de entrada no son correctos<br/> Por favor intente de nuevo <a href='./login.php'>LOGIN</a></h4>";
  }
  }else{
      echo "<h4>Por favor debe loguearse<br/> <a href='./login.php'>LOGIN</a></h4>";
  }
  
?>
<a href="./comprar.php">Realizar compras</a>

</div>
<div id="footer">
Diseñado por: <a href="#">J.E.D</a>; Agradecimientos a: <a href="#">Dehivis Perez</a>
</div>

</div>

</body>
</html>  
