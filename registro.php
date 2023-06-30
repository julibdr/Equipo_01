<?php
session_start();

require_once "classes/RegistroClass.php";
require_once "classes/Connection.php";
require_once "classes/Usuario.php";

$postData = $_POST;

$registro = new Usuario();


if($registro){
    header('location: index.php?seccion=home');
} else {
    header('location: index.php?seccion=addUserView');
}

