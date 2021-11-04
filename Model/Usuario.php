<?php
class Usuario {
  
    public function cadastro($usuario,$senha) {
		$msg = '';
		/* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
		if(strlen($usuario)<5){
			$msg = 'O usuário deve possuir mais de 5 caracteres <br>';
		}
		else if(strlen($senha)<8){
			$msg = $msg . 'A senha deve possuir mais de 8 caracteres <br>';
		}
//		else{
			// aqui se cadstraria os dados no banco
//		}
		return $msg;
    }
}
?>