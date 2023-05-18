<?php
    $vista = isset($_GET['seccion']) ? $_GET['seccion'] : 'home';
?>
<?php include('partials/header.php') ?>
<?php include ("views/$vista.php")?>
<?php include('partials/footer.php') ?>

