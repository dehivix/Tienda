<?php
//EN ESTA PAGINA DESTRUYO LA SESSION
session_start();

session_destroy();
$_SESSION = array();
?> 
<a href="./comprar.php">Realizar compras</a>