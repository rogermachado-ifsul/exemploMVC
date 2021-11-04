<?php
session_start();
require_once('../Model/Usuario.php');
var_dump($_POST);
if(isset($_POST['cadastrar'])){
	$controller = new UsuarioController();
	$msg = $controller->cadastro();
}

class UsuarioController {
	
    public function cadastro() {
		
		/* Pega o usuário e senha preenchidos no formulário de login da View */
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		/* Encaminha os dados a Model para que seja realizado a validação */
		$model = new Usuario();
		$validacao = $model->cadastro($usuario,$senha);

		if(strcmp($validacao, '') ){
			$_SESSION['cadastro'] = $validacao;
			header('Location: ../View/cadastro-usuario.php');
		}	
		else{
			$_SESSION['usuario'] = $usuario;
			header('Location: ../View/cadastrado.php');
		}
    }
}

?>