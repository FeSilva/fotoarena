<?php
Class ValidaUsuario
{

	function Validar($form){
		$arg = [
			empty($form['nome']) ? "Por Favor Preencha o campo de Nome corretamente." : $form['nome'],
			filter_var($form['email'], FILTER_VALIDATE_EMAIL)	?  $form['email'] :  "Por Favor Preencha o campo de E-mail corretamente.",
			$form['senha'] != $form['conf_pass'] ? "As senhas não são iguais" :  $form['senha']
		];

		for($i = 0; $i < count($arg); $i++){
			if(!in_array($arg[$i],$form)){
				return $arg[$i];
			}
		}

		
	
		return $arg;
	}
}

?>
