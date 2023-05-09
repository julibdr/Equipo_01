<?php
    $vista = $_GET['seccion'];
    $vista = $vista ? $vista : 'home';

?>
<?php include('partials/header.php') ?>
<?php include ("views/$vista.php")?>
<?php include('partials/footer.php') ?>

