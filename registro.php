<?php


require_once "classes/RegistroClass.php";
require_once "classes/Connection.php";
require_once "classes/Usuario.php";
require_once "autenticacion.php";

$postData = $_POST;



try {
    $registro = (new \classes\Usuario());

    $registro->add(
        $postData['email'],
        $postData['password']
    );

    header("Location: ../index.php");
} catch (\Exception $e) {
    echo $e->getMessage();
}


if($registro){
    header('location: index.php?seccion=home');
} else {
    header('location: index.php?seccion=addUserView');
}

