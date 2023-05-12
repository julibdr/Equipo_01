<?php
function leerContenido() {
    $contenido = file_get_contents("data/productos.json"); 
    $convertirContenido = json_decode($contenido, true); 
    return $convertirContenido["products"];
}
 function crearCard($list): string {
    //return json_encode($list);
    $html = "";
    $html .= "<div class='row row-cols-2 m-4'>";
    foreach($list as $item) {
      
        $html .= "<div class='card g-3 m-3' style='width: 18rem'>";
        $html .= "<img src='{$item['imagen']}' class='card-img-top' alt='Nombre'>";
        $html .= "  <div class='card-body'>";
        $html .= "<h2 class='card-title'>{$item['nombre']}</h2>";
        $html .= "<p class='card-text'>{$item['descripcion']}</p>";
        $html .= "</div>";
        $html .= "<ul class='list-group list-group-flush'>";
        $html .= "<li class='list-group-item'>{$item['precio']}</li>";
        $html .= "<li class='list-group-item'>{$item['pantalla']}</li>";
        $html .= "<li class='list-group-item'>{$item['categoria']}</li>";
        $html .= "<li class='list-group-item'>{$item['sistemaoperativo']}</li>";
        $html .= "</ul>";
        $html .= "</div>";
    }
    $html .= "</div>";
    return $html;
}
?>
<?= crearCard(leerContenido()) ?>