<?php
    include_once("dash_menu.php");
?>
<div class="elenco col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<a href="dash.php?link=4"><button type="button" class="btn btn-success pull-right">Cadastrar Jogador</button></a>
	<select type="button" class="pull-right pesquisa" cl name="categoria_id">
            <option>Ordernar por</option>

            <?php ?>
              	
		        	<option value="nome">Nome</option>
		        	<option value="numero">Número</option>		        	 
		      		
            <?php ?>  
          </select>
 	<h1 class="page-header">Elenco</h1>


	<?php 
		$buscarJog=$pdo->prepare("SELECT * FROM jogadores ORDER BY nome");

		$buscarJog->execute();

		$linha=$buscarJog->fetchAll(PDO::FETCH_OBJ);
	?>

  
  	<div class="table-responsive">
	    <table class="table table-striped">
	      <thead>
	        <tr>
	          <th>Foto</th>
	          <th>Nome</th>
	          <th>Posição</th>
	          <th>Número</th>
	          <th>Email</th>
	        </tr>
	      </thead>
	      <tbody>
	      	<?php

              	foreach ($linha as $listarJ) {
              		$imagem = $listarJ->imagem;

                	echo "<tr>";
				        echo "<td> 
				        		<div class='placeholder'>
                    				<a href='dash.php?link=5&id=".$listarJ->id."'><img src='../imagens/".$imagem."' width='50' height='50' class='img-responsive' alt='Generic placeholder thumbnail'></a>
                    			</div> 
                    		  </td>";
		            	echo "<td>".$listarJ->nome."</td>";
		            	echo "<td>".$listarJ->posicao."</td>";
		            	echo "<td> #".$listarJ->numero."</td>";
				        echo "<td>".$listarJ->email."</td>";
			        echo "</tr>";
              }
            ?>
	      </tbody>
	    </table>
	</div>
</div>
