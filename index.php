<?php 
require_once "validaClass.php";

$validar = new ValidaUsuario;

$_POST = json_decode(file_get_contents('php://input'));

  $dados = array(
    'nome'   			=> $_POST->nome,
	'email'				=> $_POST->email,
	"senha"				=> !empty($_POST->senha) 	 ? $_POST->senha 	  :'',
	"conf_pass"			=> !empty($_POST->confirmar) ? $_POST->confirmar : '',
);

$return = $validar->Validar($dados);
var_dump($return);


