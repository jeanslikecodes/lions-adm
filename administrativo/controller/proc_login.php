<?php 

	session_start();

	$username = $_POST['username'];
	$senha = $_POST['senha'];

	echo $username.' '.$senha;

	include_once("../model/conexao.php");

	$buscarusuario=$pdo->prepare("SELECT * FROM usuarios WHERE username=:username AND senha=:senha");

	$buscarusuario->bindValue(":username", $username);
	$buscarusuario->bindValue(":senha", $senha);

	$buscarusuario->execute();
	
	$linha=$buscarusuario->fetchAll(PDO::FETCH_ASSOC);
		
	foreach ($linha as $listar) {
		echo "Nome Completo: ".$listar['nome']."<br/>";
		echo "Email: ".$listar['email']."<br/>";
	}

	if(empty($linha)) {
		$_SESSION['LoginErro'] = "Usuário e/ou Senha inválidos!";

		header("Location: ../view/login.php");
	} else {
		$_SESSION['usuarioId'] = $listar['id'];
		$_SESSION['usuarioUsername'] = $listar['username'];
		$_SESSION['usuarioNome'] = $listar['nome'];
		$_SESSION['usuarioSenha'] = $listar['senha'];
		$_SESSION['usuarioEmail'] = $listar['email'];
		$_SESSION['usuarioIdCargo'] = $listar['id_cargo'];

		header("Location: ../view/dash.php");

	}


?>



