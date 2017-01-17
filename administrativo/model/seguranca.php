<?php 
	ob_start();

	if($_SESSION['usuarioId'] == "" || $_SESSION['usuarioUsername'] == "" || $_SESSION['usuarioNome'] == "" || $_SESSION['usuarioSenha'] == "" || $_SESSION['usuarioEmail'] == "" || $_SESSION['usuarioIdCargo'] == "") {

		unset($_SESSION['LoginErro'],
            $_SESSION['usuarioId'],
            $_SESSION['usuarioUsername'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioSenha'],
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioIdCargo']);

		$_SESSION['LoginErro'] = "Usuário deverá estar logado!";

		header("Location: login.php");
	}

?>