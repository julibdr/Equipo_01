<?php
use classes\Prod;
require_once 'classes/Prod.php';
$producto = new Prod();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$carrito = $_SESSION['carrito'];

// Obtener los productos desde la base de datos o cualquier otra fuente de datos
$productos = $producto->getAll();

?>

<h1>Carrito de compras</h1>

<?php foreach ($carrito as $item): ?>
    <?php
    $id_producto = $item['id_producto'];

    // Buscar el producto correspondiente en el array $productos
    $producto_encontrado = null;
    foreach ($productos as $producto) {
        if ($producto->getId() == $id_producto) {
            $producto_encontrado = $producto;
            break;
        }
    }

    // Verificar si se encontró el producto
    if ($producto_encontrado !== null) {
        $nombre = $producto_encontrado->getProducto();
        $precio = $producto_encontrado->getPrecio();
        $imagen = $producto_encontrado->getImagen();
        $descripcion = $producto_encontrado->getDescripcion();
        
    } else {
        // Manejar el caso en el que no se encuentre el producto
        $nombre = 'Producto no encontrado';
        $precio = 0;
        $imagen = '';
    }
    ?>

<div class="card mb-3" style="max-width: 700px; margin-left: 25%; margin-top: 3%;">
    <div class="row g-0">
    <div class="col-md-4">
        <img src="<?=$imagen?>" class="img-fluid rounded-start" alt="<?=$nombre?>">
    </div>
    <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title"><?=$nombre?></h5>
        <p class="card-text"style="font-size: x-large;font-weight: 500;">US $<?=$precio?></p>
        <p class="card-text"><?=$descripcion?></p>
        </div>
    </div>
    </div>
</div>
<?php endforeach; ?>
