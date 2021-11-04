<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="pt-br"> 
<head> 
    <meta charset="UTF-8">
    <title> Usuário Logado </title> 
</head> 

<body>
<?php
if(isset($_SESSION['usuario'])){
    echo "<h1> Bem vindo $_SESSION[usuario] </h1>";
    echo "<br><br>";
    echo "<h2> Cadastro realizado com Sucesso </h2>";
}

?>
</body>