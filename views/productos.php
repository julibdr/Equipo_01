<?php
use classes\Prod;
require_once 'classes/Prod.php';
// Creo la instancia de la clase Prod
$miProducto = new Prod();
// Obtengo los productos desde la base de datos
$productos = $miProducto->getAll();

// Filtro los productos por categoría
$cat = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$categoria = [];

if (!empty($cat)) {
    $categoria = filtrarPorCategoria($productos, $cat);
} else {
    $categoria = $productos;
}

function filtrarPorCategoria($productos, $categoria) {
    $productos_filtrados = [];

    foreach ($productos as $prod) {
        if ($prod->getCategoria() == $categoria) {
            $productos_filtrados[] = $prod;
        }
    }

    return $productos_filtrados;
}

?>

<script>
    console.log("producto: ", <?=json_encode($categoria)?>);
</script>

<div class="container">
    <div class="row">
        <?php foreach ($categoria as $item) {?>
            <div class='card g-3 m-3 miCard' style='width: 18rem'>
                <img src="<?=$item->getImagen()?>" class='card-img-top' alt="<?=$item->getProducto()?>">

                <div class='card-body'>
                    <h2 class='card-title'><?=$item->getProducto()?> </h2>
                    <p class='card-text'><?=$item->getDescripcion()?></p>
                </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>Precio: $<?=$item->getPrecio()?> usd</li>
                    <li class='list-group-item'>Pantalla: <?=$item->getPantalla()?></li>
                    <li class='list-group-item'>Categoria: <?=$item->getCategoria()?></li>
                    <li class='list-group-item'>Sistema operativo: <?=$item->getSistema()?></li>
                    <a href="index.php?seccion=detalles&id=<?=$item->getId()?>" class="btn btn-primary btnProd">Ver Detalles</a>
                    <a href="index.php?seccion=carrito" id="carrito" class="btn btn-primary btnProd">Comprar</a>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>
