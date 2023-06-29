<?php
    $vista = isset($_GET['seccion']) ? $_GET['seccion'] : 'home';

    $vista = $method ? ($method."_".$vista) : $vista;
?>
<?php include('partials/header.php') ?>
<?php include ("views/$vista.php")?>
<?php include('partials/footer.php') ?>

