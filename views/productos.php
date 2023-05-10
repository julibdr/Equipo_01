<?php
// (void) -> string
require_once "classes/prod.php";


// function getDbProducts() {
//     $ObjConection = new Conection();
//     $conection = $ObjConection->getConection();

//     $query = "SELECT * FROM `products`";
//     $PDO = $conection->prepare($query);
//     $PDO->setFetchMode(PDO::FETCH_CLASS, "Product");
//     $PDO->execute();

//     $products = $PDO->fetchAll();

//     return $products;
// }

function leerContenido() {
    $content = file_get_contents("data/productos.json"); //string
    $contentConversion = json_decode($content, true); //object
    return $contentConversion["products"];
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
  
 <!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
 
</div> -->