<?php
session_start();

if(isset($_SESSION["cart"][$_GET["id"]])){
  if(isset($_GET["remove_all"])){
    unset($_SESSION["cart"][$_GET["id"]]);
  }else{
    unset($_SESSION["cart"][$_GET["id"]]);
  }
}
$_SESSION["alert"] = 'Producto eliminado del carrito correctamente. ';
header("location: index.php")

 ?>
