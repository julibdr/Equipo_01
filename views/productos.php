<?php
require_once 'libs/catalogo.php';


$cat = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$productos = leerContenido();

if (!empty($cat)) {
    $categoria= filtrarPorCategoria($productos, $cat);
}else{
    $categoria = $productos;
}

?>


<script>
    console.log("producto: ", <?=json_encode($categoria)?>);
</script>

<div class="container">
    <div class="row">
<?php foreach ($categoria as $item) {?>
    <div class='card g-3 m-3 miCard' style='width: 18rem'>
    <img src="<?=$item['imagen']?>" class='card-img-top' alt="<?=$item['nombre']?>">

    <div class='card-body'>
    <h2 class='card-title'><?=$item['nombre']?> </h2>
    <p class='card-text'><?=$item['descripcion']?></p>
    </div>
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'>Precio: <?=$item['precio']?></li>
    <li class='list-group-item'>Pantalla: <?=$item['pantalla']?></li>
    <li class='list-group-item'>Categoria: <?=$item['categoria']?></li>
    <li class='list-group-item'>Sistema operativo: <?=$item['sistemaoperativo']?></li>
    <a href="index.php?seccion=detalles&id=<?=$item['id']?>" class="btn btn-primary btnProd">Ver Detalles</a>
    </ul>
    </div>
<?php } ?>
</div>
</div>