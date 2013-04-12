<?php
 include('mysql.php');
  $db = new Mysql();

  //verifico si los datos fueron enviados desde el formulario
  if(isset($_GET['var']) && $_GET['var']==1){
  if(!empty($_POST)){
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($nombre) && !empty($cedula) && !empty($email) && !empty($direccion) && !empty($username) && !empty($password)){
	$sql = "INSERT INTO usuarios(nombre, cedula, email, direccion, username, clave) VALUES ('$nombre', '$cedula', '$email', '$direccion', '$username', '$password')";

	$resultset = $db->consulta($sql);
	//COMIENZO EL PROCESO DE REGISTRO DE LAS COOKIES
	if($resultset){
	  header('location: ./index.php');
	}
	
    }else{
	echo "<h3>POR FAVOR VERIFIQUE EL FORMULARIO Y COMPLETE TODOS LOS DATOS</h3>";
    }
  }
    
  }
?>
<html>
  <head>
    <title>Registro de Usuario</title>
<style>
  h3{
    color: red;
}
</style>
  </head>
<body>

<h1>Registro de Usuario</h1>
<fieldset>
<form method="post" action="./registro.php?var=1">
<legend>Datos del cliente</legend>
<label>Nombre y Apellido:</label>
<input type="text" name="nombre" /><br/>
<label>Cedula:</label>
<input type="text" name="cedula" /><br/>
<label>Email:</label>
<input type="text" name="email" size="30" /><br/>
<label>Direcci&oacute;n:</label><br/>
<textarea name="direccion" rows="4" cols="40"></textarea><br/>
</fieldset>

<fieldset>
<legend>Datos de usuario</legend>
<label>Nombre de Usuario:</label>
<input type="text" name="username" />
<label>Contrase&ntilde;a:</label>
<input type="password" name="password" /><br/>
</fieldset>
<input type="submit" value="Enviar datos >>">
<input type="reset" value="Borrar >>">
</form>
</body>
</html>  
