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
    <div class='card g-3 m-3' style='width: 18rem'>
    <img src="<?=$item['imagen']?>" class='card-img-top' alt="<?=$item['nombre']?>">

    <div class='card-body'>
    <h2 class='card-title'><?=$item['nombre']?> </h2>
    <p class='card-text'><?=$item['descripcion']?></p>
    </div>
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><?=$item['precio']?></li>
    <li class='list-group-item'><?=$item['pantalla']?></li>
    <li class='list-group-item'><?=$item['categoria']?></li>
    <li class='list-group-item'><?=$item['sistemaoperativo']?></li>
    </ul>
    </div>
<?php } ?>
</div>
</div>