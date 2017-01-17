<?php
    include_once("../dash_menu.php");
?>
<div class="elenco col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="container theme-showcase" role="main">
	  <div class="page-header">
	  <h1>Cadastro de Elenco</h1>
	</div>
	<input type="text" id="calendario">
	<div class="row">
	  <div class="col-md-9">
	    <form class="form-horizontal" method="POST" action="../controller/elenco/p_cad_elenco.php" enctype="multipart/form-data">

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="nome" placeholder="Informe o nome">
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Apelido</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="apelido" placeholder="Informe o apelido">
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	        
	        <div class="col-sm-10">
	          <input type="email" class="form-control" name="email" placeholder="Informe o E-mail">
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Posição - 1</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="posicao" placeholder="Informe a Posição">
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Posição - 2</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="posicao2" placeholder="Informe a Posição">
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Número</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="numero" placeholder="Informe a Posição">
	        </div>
	      </div>

	       
	      <div class="form-group">
	        <label for="exampleInputFile" class="col-sm-2 control-label">Upload de Imagem</label>

	        <div class="upload col-sm-10">
	          <input type="file" id="exampleInputFile" name="imagem">
	        </div>
	      </div> 
	      
	      <div class="form-group">
	        <div class="col-sm-offset-2 col-sm-10">
	          <button type="submit" class="btn btn-success">Cadastrar</button>
	        </div>
	      </div>
	    </form>
	  </div>
	</div>
</div>