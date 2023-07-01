<?php
session_start();
require_once "classes/AutenticacionesClass.php";
require_once "classes/Connection.php";
require_once "classes/Usuario.php";


$postData = $_POST;

$login = ((new classes\autenticacion())->logIn($postData["email"], $postData["password"]));

if($login) {
    header('location: index.php?seccion=home');
} else {
    header('location: index.php?seccion=login');
}
