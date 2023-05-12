<?php
require_once 'libs/catalogo.php';

$cat = $_GET['categoria'];
$cat = $cat ? $cat : 'tablet';

$productos = leerContenido();
$categoria = filtrarPorCategoria($productos,$cat)
?>


<script>
    console.log("productos: ", <?=json_encode($products)?>);
</script>

<?php foreach ($categoria as $item) {?>
    <div class='card g-3 m-3' style='width: 18rem'>
    <img src=<?{$item['imagen']}?> class='card-img-top' alt='Nombre'>
    <div class='card-body'>
    <h2 class='card-title'><?{$item['nombre']}?> </h2>
    <p class='card-text'><?{$item['descripcion']}?></p>
    </div>
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><?{$item['precio']}?></li>
    <li class='list-group-item'><?{$item['pantalla']}?></li>
    <li class='list-group-item'><?{$item['categoria']}?></li>
    <li class='list-group-item'><?{$item['sistemaoperativo']}?></li>
    </ul>
    </div>
<?php } ?>