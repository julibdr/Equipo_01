<!-- datos aulumnos -->
<?php
// (void) -> string
require_once "classes/alumnos.php";


function leerAlumno() {
    $content = file_get_contents("data/alumnos.json"); //string
    $contentConversion = json_decode($content, true); //object
    return $contentConversion["alumnos"];
}

function crearAlumno($list): string {
    //return json_encode($list);
    $html = "";
    $html .= "<div class='row row-cols-2 m-4 g-3'>";
    foreach($list as $item) {
        $html .= "<div class='card g-3 m-3' style='width: 18rem'>";
        $html .= "<img src='{$item['imagen']}' class='card-img-top' alt='Nombre'>";
        $html .= "  <div class='card-body'>";
        $html .= "<h2 class='card-title-nosotros'>{$item['nombre']}</h2>";
        $html .= "<p class='card-text'>{$item['edad']}</p>";
        $html .= "<p class='card-text-correo'>{$item['correo']}</p>";
        $html .= "<p class='card-text'>{$item['redes']}</p>";
        $html .= "</div>";
        $html .= "</div>";
        
    }
    $html .= "</div>";
    return $html;
}

?>

<?= crearAlumno(leerAlumno()) ?> 