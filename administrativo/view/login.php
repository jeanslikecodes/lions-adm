<?php 

  session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de Login">
    <meta name="author" content="Jean Carlos">
    <link rel="icon" href="../../favicon.ico">

    <title>CTBA LIONS - ADM</title>


    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
  <div class="bg">
    <?php 

      unset($_SESSION['LoginErro'],
            $_SESSION['usuarioId'],
            $_SESSION['usuarioUsername'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioSenha'],
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioIdCargo']);
    ?>

    <div class="container bg2">
    
      <br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <br/><br/>

      <form class="form-signin" method="POST" action="../controller/proc_login.php">
        <!-- <h2 class="form-signin-heading text-center">Insira seu Login</h2> -->

        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="username" class="form-control" placeholder="Informe o Username" required autofocus>

        <br/>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Informe a senha" required>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

        <br/>

        
          <?php
            if(isset($_SESSION['LoginErro'])) { ?>
            <p class="text-center text-danger alert alert-danger"/>
          <?php           
              echo $_SESSION['LoginErro'];

              unset($_SESSION['LoginErro']);
            }
          ?>
        

      </form>

      <br><br>
      
      <h2 class="form-signin-heading text-center msg">1º portal administrativo de um time de Futebol Americano do Paraná!<h2>


      <h1 class="form-signin-heading text-center msg"><strong>#GoLions</strong></h1>

    </div> 

    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </div>
  </body>
</html>
