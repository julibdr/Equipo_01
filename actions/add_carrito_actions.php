<?php
session_start();
require_once "../classes/Carrito.php";
require_once "../classes/Connection.php";

$idProducto = $_GET['id_producto'];
$idUsuario = $_GET['id_usuario'];
$cantidad = $_GET['cantidad'];

$carrito = new \classes\Carrito();
$carrito->agregarAlCarrito($idProducto, $idUsuario, $cantidad);

header("Location: ../index.php?seccion=carrito");