<?php
session_start();
include('mysql.php');

$baseDatos = new MySQL();

$sql = "SELECT * FROM productos ORDER BY id ASC";
$resulset = mysql_query($sql);

while($producto = mysql_fetch_array($resulset)){
//echo  $producto['id'];
?>
<fieldset style="width:300px; height:400px;display:inline">
<div style="display:inline;">
  <img src="./img/<?= $producto['id'] ?>.jpg" alt="<?= $producto['id'] ?>" width="250" />
</div>
<div>
  <b><?= $producto['nombre'] ?>:</b> <?= $producto['descripcion'] ?>
</div>
<div>
  Precio: <?= $producto['precio'] ?>
</div>
<a href="doCompra.php?id=<?= $producto['id'] ?>">comprar</a>  
</fieldset>
<?php
}
?>
<?
  //PRUEBA DE LA SESSION
  if(isset($_SESSION['username'])){
    echo "Su nombre de usuario es: ".$_SESSION['username'];
    echo "<br/>";
    echo "<a href='./close.php'>Cerrar Session</a>";
  }else{
    echo "<h4>Por favor debe loguearse para realizar una compra<br/> <a href='./login.php'>LOGIN</a></h4>";
  }
?>
