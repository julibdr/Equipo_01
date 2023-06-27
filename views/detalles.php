<?php
use classes\Prod;
require_once 'classes/Prod.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$miProducto = new Prod();
$productos = $miProducto -> getAll();
function filtrarPorId($productos, $id) {
    $detalles = [];
    foreach ($productos as $pr) {
        if ($pr->getId() == $id) {
            $detalles[] = $pr; 
        }
    }
    return $detalles;
}
$detalles = filtrarPorId($productos, $id);
?>
<script>
    console.log("productos: ", <?=json_encode($detalles)?>);
</script>
<div class="container">
    <div class="row">
<?php foreach ($detalles as $item) {?>
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
    </ul>
    </div>
<?php } ?>
</div>
</div>