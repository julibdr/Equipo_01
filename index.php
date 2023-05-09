<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
=======
<?php
    $vista = $_GET['seccion'];
    $vista = $vista ? $vista : 'home';

?>

<?php include('partials/header.php') ?>
<?php include ("views/$vista.php")?>
<?php include('partials/footer.php') ?>

>>>>>>> Stashed changes
