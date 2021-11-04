<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="pt-br"> 
<head> 
    <meta charset="UTF-8">
    <title> Login </title> 
</head> 
<body>
<div>
	
	<h3>Cadastro de Usuário</h3>
	<form action="../Controller/UsuarioController.php" method ="post">
		Usuário:
		<input type="text" name="usuario"></br></br>
		Senha:
		<input type="password" name="senha"></br></br>
		<input class="botao" type="reset"  value="Limpar">
		<input class="botao" type="submit" name="cadastrar" value="Cadastrar">
		</form>
</div>

<?php
    if(isset($_SESSION['cadastro'])){
		echo "<h3> $_SESSION[cadastro] </h3>";
		unset($_SESSION['cadastro']);
    }
?>
</body>
</html>