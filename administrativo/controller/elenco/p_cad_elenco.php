<?php 
	session_start();

	include_once("../../model/conexao.php");
	include_once("../../model/seguranca.php");

	$nome = $_POST["nome"];
	$apelido = $_POST["apelido"];
	$email = $_POST["email"];
	$posicao = $_POST["posicao"];
	$posicao2 = $_POST["posicao2"];
	$numero = $_POST["numero"];
	$imagem = $_FILES['imagem']['name'];

	// Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = "../../imagens/";

	// Tamanho máximo do arquivo (Em bytes)
	$_UP['tamanho'] = 1014*1024*2; // 5 mb

	// Array de extensões permitidas
	$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

	// Renomear arquivo (Se true, será salvo como .jpg e em nome único)
	$_UP['renomear'] = false;

	// Array com os tipos de erros de upload de PHP
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo é maior que o limite do PHP!';
	$_UP['erros'][2] = 'O arquivo é maior que o limite especificado no html!';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente!';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo!'; 

	// Verifica se houve erro
	if ($_FILES['imagem']['error'] != 0) {
		echo $imagem;
		die ("Não foi possível fazer o upload, erro: <br />".$_UP['erros'].$_FILES['imagem']['error']);
		exit;
	} 

	$extensao = strtolower(end(explode('.', $_FILES['imagem']['name'])));

	if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lions/administrativo/view/dash.php?link=4'>

			<script type=\"text/javascript\">
				alert(\"Por favor, envie arquivos com as seguintes extensões: jpeg, jpg, png, gif!\");
			</script>";
	} else if ($_UP['tamanho'] < $_FILES['imagem']['size']) {
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lions/administrativo/view/dash.php?link=4'>

			<script type=\"text/javascript\">
				alert(\"imagem maior!\");
			</script>";
  
	} else { // Hora de movelo para a pasta foto
	
		// Verifica se deve trocar o nome da imagem
		if ($_UP['renomear'] == true ) {
			// Cria um nome baeado no Unix Timestamp atual com extensão '.jpg'
			$nome_final = md5(time()).'.'.extensao;
		}  else {
			// Mantem o nome original do arquivo
			$nome_final = $_FILES['imagem']['name'];
		}	

		// Verificar se é possível mover a imagem
		if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'].$nome_final)) {

			$cadElenco=$pdo->prepare("INSERT INTO jogadores(nome, email, apelido, posicao, posicao2, numero, imagem)VALUES(:nome, :email, :apelido, :posicao, :posicao2, :numero, :imagem)");

			$cadElenco->bindValue(":nome", $nome);
			$cadElenco->bindValue(":email", $email);
			$cadElenco->bindValue(":apelido", $apelido);
			$cadElenco->bindValue(":posicao", $posicao);
			$cadElenco->bindValue(":posicao2", $posicao2);
			$cadElenco->bindValue(":numero", $numero);
			$cadElenco->bindValue(":imagem", $nome_final);
			
			$cadElenco->execute();

				if ($cadElenco->rowCount()) {
					echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lions/administrativo/view/dash.php?link=3'>

						<script type=\"text/javascript\">
							alert(\"Produto cadastado com sucesso!\");
						</script>";
				} else {
					echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lions/administrativo/view/dash.php?link=3'>

						<script type=\"text/javascript\">
							alert(\"Cadastro não realizado!\");
						</script>";
				} 
		} else {
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/lions/administrativo/view/dash.php?link=3'>

			<script type=\"text/javascript\">
				alert(\"Imagem não carregada!\");
			</script>"; 
		}
	}			

?>
