<main>
<script src="https://kit.fontawesome.com/ae768101bd.js" crossorigin="anonymous"></script>
</main>
<?php
use classes\Alumnos;
require_once 'classes/Alumnos.php';

$miAlumno = new Alumnos();
$alumnos = $miAlumno->getAll();

?>

<div class="contenedor">
    <div class='row row-cols-1 row-cols-md-3 m-4 g-3'>
    <?php foreach ($alumnos as $item) {?>
        <div class='col mb-4'>
            <div class='card g-3' style='width: 18rem'>
                <img src="<?= $item->getImagen() ?>" class='card-img-top' alt="<?= $item->getNombre() ?>">
                <div class='card-body'>
                    <h2 class='card-title-nosotros'><?= $item->getNombre() ?></h2>
                    <p class='card-text-correo'><?= $item->getCorreo() ?></p>
                    <p class='card-text'><?= $item->getEdad() ?></p>
                    <p class='card-text'><i class='fa-brands fa-github' style='color: #000000;'></i><?= $item->getRedes() ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>



