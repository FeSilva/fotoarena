<?php
Class ValidaUsuario
{

	function Validar($form){
		$arg = [
			empty($form['nome']) ? "Por Favor Preencha o campo de Nome corretamente." : $form['nome'],
			filter_var($form['email'], FILTER_VALIDATE_EMAIL)	?  $form['email'] :  "Por Favor Preencha o campo de E-mail corretamente.",
			$form['senha'] != $form['conf_pass'] ? "As senhas não são iguais" :  $form['senha']
		];

		if(!in_array($arg[0],$form)){
			return $arg[0];
		}
		
		if(!in_array($arg[1],$form)){
			return $arg[1];
		}
		
		if(!in_array($arg[2],$form)){
			return "As senhas não são iguais";
		}
	
		return $arg;
	}
}

?>
