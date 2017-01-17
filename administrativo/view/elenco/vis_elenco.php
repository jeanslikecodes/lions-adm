
<?php

    include_once("../dash_menu.php");

    $id = $_GET['id'];

  	$buscarEle=$pdo->prepare("SELECT * FROM jogadores WHERE id=:id LIMIT 1");

	$buscarEle->bindValue(":id", $id);

  	$buscarEle->execute();

	$linha=$buscarEle->fetchAll(PDO::FETCH_OBJ);
	        
	foreach ($linha as $listar) {
	    $id = $listar->id;
	    $nome = $listar->nome;
	    $imagem = $listar->imagem;
	}
?>
<div class="elenco col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <button type="button" class="btn btn-success pull-right">Editar Jogador</button>
          
          

            <div class="row placeholders">

            	<div class="col-xs-6 col-sm-3 placeholder">
            	  	<img src="../imagens/<?php echo $imagem; ?>" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            	</div>
            	<div class="h1-ele">
            		<h2 class="page-header h1-ele"><strong><?php echo $listar->nome." "; echo "(".$listar->apelido.")"; ?></strong></h2>
            		<h3 class="page-header h1-ele"><?php echo $listar->posicao."   "; echo "#".$listar->numero; ?></h3>
            		<h4 class="page-header h1-ele"><?php echo $listar->email;?></h4>
            	</div>
          	</div>

          <h4 class="sub-header">Ficha Técnica (Completa)</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Apelido</th>
                  <th>Email</th>
                  <th>Posição - 1</th>
                  <th>Posição - 2</th>
                  <th>Número</th>
                </tr>
              </thead>
              <tbody>
                <?php

                  foreach ($linha as $listarU) {
                    echo "<tr>";
                      echo "<td>".$listar->nome."</td>";
                      echo "<td>".$listar->apelido."</td>";
                      echo "<td>".$listar->email."</td>";
                      echo "<td>".$listar->posicao."</td>";
                      echo "<td>".$listar->posicao2."</td>";
                      echo "<td> #".$listar->numero."</td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
            <script>
                $(function() {
                  $( "#calendario" ).datepicker();
                });
            </script>

            <p>Data: <input type="text" id="calendario" /></p>
          </div>
		</div>
		</div>
        </div>
      </div>
    </div>