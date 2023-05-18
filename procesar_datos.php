
<main>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</main>

<!-- <?php 
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];
$consulta= $_POST['consulta'];
// $submit= $_POST['submit'];

echo "<p>Esto es" .$nombre."</p>";
?> -->

<?PHP
    // LOS VALORES ENVIADOS POR GET VAN A FIGURAR EN LA VARIABLE SUPERGLOBAL $_GET
    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    if(!$nombre) echo "El campo.....";

?>

<div class="row justify-content-center mt-5">
<div class="card" style="width: 20rem;">
<h1></h1>
<ul class="list-group list-group-flush">
<li class="list-group-item">El nombre es: <?= $nombre ?></li>
<li class="list-group-item">El apellido es: <?= $apellido ?></li>
<li class="list-group-item">El email es: <?= $email ?></li>
<li class="list-group-item">La consulta es: <?= $consulta ?></li>
</ul>
</div>
</div>


