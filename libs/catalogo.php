<?php
function leerContenido() {
    $contenido = file_get_contents("data/productos.json"); 
    $convertirContenido = json_decode($contenido, true); 
    return $convertirContenido["products"];
}

function filtrarPorCategoria($products, $categoria) {
    $productos_filtrados = [];
  
    foreach ($products as $prod) {
        if ($prod['categoria'] == $categoria) {
            $productos_filtrados[] = $prod;
        }
}  
return $productos_filtrados;
}
function filtrarPorId($products, $detalleId) {
    $detalles = [];
    foreach ($products as $pr) {
        if ($pr['id'] == $detalleId) {
            $detalles[] = $pr; 
        }
    }
    return $detalles;
}
?>