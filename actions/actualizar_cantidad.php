<?php

require_once "../classes/Carrito.php";
require_once "../classes/Connection.php";

$id_producto = $_GET['id'];
$accion = $_GET['accion'];

try {
    $carrito = new \classes\Carrito();

    if ($accion === 'incrementar') {
        $carrito->aumentarCantidad($id_producto);
    } elseif ($accion === 'decrementar') {
        $carrito->disminuirCantidad($id_producto);
    }
    header("Location: ../index.php?seccion=carrito");
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>
