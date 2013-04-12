<?php
session_start();
include('mysql.php');

$baseDatos = new MySQL();
  //PRUEBA DE LA SESSION
  if(isset($_SESSION['username'])){
    echo "[Hola ".$_SESSION['username']."]";
    echo "<br/>";
    echo "<a href='./close.php'>Cerrar Session</a>"."</br>";
    
  }else{
    echo "<h4>Por favor debe loguearse para realizar una compra<br/> <a href='./login.php'>LOGIN</a></h4>";
  }
?>

<?php


$sql = "SELECT * FROM productos WHERE id>12 AND id<22 ORDER BY id ASC";
$resulset = mysql_query($sql);

while($producto = mysql_fetch_array($resulset)){
//echo $producto['id'];
?>
<fieldset style="width:300px; height:400px;float:left">
<div style="display:inline;">
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


