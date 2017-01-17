<?php
	session_start();

	include_once("../model/seguranca.php");
	include_once("../model/conexao.php");

?>
<!DOCTYPE html>
<html lang="PT-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/alteracoes.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

   
    
  </head>

  <body>

  <?php
  	include_once("dash_menu.php");

  	$link = $_GET["link"];

  	$pag[1] = "dash_menu.php";
  	$pag[2] = "comissao.php";
  	$pag[3] = "elenco.php";
  	$pag[4] = "elenco/cad_elenco.php";
    $pag[5] = "elenco/vis_elenco.php";
    $pag[6] = "mensalidade/mensalidade.php";

  	if(!empty($link)) {
        if(file_exists($pag[$link])){
          include $pag[$link];
        } else {
          include "dash_menu.php";
        }
    } else {
        include "dash_menu.php";
    }

  ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
