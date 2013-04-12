<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<?php
/*

//rescatamos las variables para el ingreso 
$username=$_GET['username'];
$clave=$_GET['clave'];

	 $conectar=mysql_connect('localhost','root', '');
	 $bd='curso_php';                       							              
     $sql = "SELECT nombre, cedula FROM usuarios WHERE username='$username' AND clave='$clave'";
	 $consulta=mysql_db_query($bd,$sql);
	 $resultado = mysql_fetch_array($consulta);
	 $nombre = $resultado['nombre'];
     $cedula = $resultado['cedula'];
	 echo $nombre;
	 echo $cedula;
	 echo "<h3>BIENVENIDO A MI TIENDA</h3>";
      echo "<h4>Estos son los datos de tu registro: </h4>";
      echo "Nombre de usuario: ".$nombre."<br/>";
      echo "Cedula de usuario: ".$cedula."<br/>";
      
*/


  if(!empty($_GET)){
    $username = $_GET['username'];
    $password = $_GET['password'];
	
	$conectar=mysql_connect('localhost','root', '');
	$bd='curso_php';
    
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
<body>
</body>
</html>
