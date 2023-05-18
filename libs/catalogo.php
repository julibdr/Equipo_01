<?php
function leerContenido() {
    $contenido = file_get_contents("data/productos.json"); //Leemos el archivo Json y la almacenamos en la variable contenido 
    $convertirContenido = json_decode($contenido, true); //decodificamos el contenido de Json: convertirContenido, ahora es un array asociativo
    return $convertirContenido["products"]; //Aray convertirContenido y el indice es products
}
//Products, lista de productos en formato de array asociativo
//Categoria -- es la categoria que sea desea filtrar 
function filtrarPorCategoria($products, $categoria) {
    $productos_filtrados = [];
    //Itera los productos y comprueba si el valor de la clave categoria coincide con la categoria que se esta buscando.
    //Si coincide se lo agrega a un productos filtrados array
    foreach ($products as $prod) {
        if ($prod['categoria'] == $categoria) {
            $productos_filtrados[] = $prod;
        }
  
    //Devuelve los que coincidieron con la categoria buscada
}  
return $productos_filtrados;
}
?>