<?php
use classes\Prod;
use classes\Caract;
require_once 'classes/Prod.php';
require_once 'classes/Caract.php';
// Creo la instancia de la clase Prod
$miProducto = new Prod();
$caract = new Caract();
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
//Mmemoria por URL
$memoriaSeleccionada = isset($_GET['memoria']) ? $_GET['memoria'] : null;
if ($memoriaSeleccionada) {
    $categoria = filtrarPorMemoria($categoria, $memoriaSeleccionada,$caract);
}
function filtrarPorCategoria($productos,$categoria)
{
    $productos_filtrados = [];

    foreach ($productos as $prod) {
        if ($prod->getCategoria() == $categoria) {
            $productos_filtrados[] = $prod;
        }
    }

    return $productos_filtrados;
}
function filtrarPorMemoria($productos, $memoria,$caract)
{
    $productos_filtrados = [];

    foreach ($productos as $prod) {
        $memorias = $caract->getById($prod->getId());
        foreach ($memorias as $memoria_prod) {
            if ($memoria_prod == $memoria) {
                $productos_filtrados[] = $prod;
                break; // Rompe el bucle interno si se encuentra una coincidencia
            }
        }
    }

    return $productos_filtrados;
}

?>

<script>
    console.log("producto: ", <?=json_encode($categoria)?>);
</script>

<div class="container">
    <div class="row mt-4">
        <div class="mb-3">
            <button type="button" class="btn btn-primary  btnProd" onclick="filtrarProductos(32)">32 GB</button>
            <button type="button" class="btn btn-primary  btnProd" onclick="filtrarProductos(64)">64 GB</button>
            <button type="button" class="btn btn-primary  btnProd" onclick="filtrarProductos(96)">96 GB</button>
            <button type="button" class="btn btn-primary  btnProd" onclick="filtrarProductos(128)">128 GB</button>
            <button type="button" class="btn btn-primary  btnProd" onclick="filtrarProductos(256)">256 GB</button>
        </div>
    </div>
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
<script>
function filtrarProductos(memoria) {
    window.location.href = "index.php?seccion=productos&memoria=" + memoria;
}
</script>