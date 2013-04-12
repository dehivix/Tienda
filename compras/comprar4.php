<html style="background-color:#081734">
<head>
  <title>MI TIENDA ONLINE</title>
  <link rel="stylesheet" href="./estilos-general.css" type="text/css" media="all">
</head>
<body>
<div id="global">
<div id="cabecera">
<div id="logotipo">
<a href="index.php">
<img src="./img/logotipo.jpg" width="355" heigth="100" 
alt="Haz click para volver a la página de inicio">
</a>
</div>
<div id="publicidad" style="color:white"><h2>Por favor Loguese para realizar su compra</h2></div>
</div>
  <div id="navegacion">
     <ul>
<li><a href="./index.php">HOME</a></li><li><a href="./registro.php">REGISTRARSE</a></li><li><a href="./close.php">CERRAR SESSION</a></li>
     </ul>
  </div>
<div id="contenido">
<?php
session_start();
include('mysql.php');

$baseDatos = new MySQL();
  //PRUEBA DE LA SESSION
  if(isset($_SESSION['username'])){
    echo "[Hola ".$_SESSION['username']."]";
    echo "<br/>";
    
  }else{
    echo "<h4>Por favor debe loguearse para realizar una compra<br/> <a href='./login.php'>LOGIN</a></h4>";
  }
?>

<?php

$sql = "SELECT * FROM productos WHERE id>=33 ORDER BY id ASC";
$resulset = mysql_query($sql);

while($producto = mysql_fetch_array($resulset)){
//echo $producto['id'];
?>


<fieldset style="width:350px; height:500px;float:left">
<div style="display: inline">
  <img src="./img/<?= $producto['nombre'] ?>.jpg" alt="<?= $producto['id'] ?>" width="250" />
</div>
<div>
  <b><?= $producto['nombre'] ?>:</b> <?= $producto['descripcion'] ?>
</div>
<div>
  Precio: <?= $producto['precio'] ?>
</div>
<a href="doCompra.php?id=<?= $producto['nombre'] ?>">Comprar</a>
</fieldset>

<?php
}
?>
</div>
</div>
</body>
</html>