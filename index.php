<?php 
require_once "validaClass.php";

$validar = new ValidaUsuario;

$_POST = json_decode(file_get_contents('php://input'));

$return = $validar->Validar($_POST);

var_dump($return);


