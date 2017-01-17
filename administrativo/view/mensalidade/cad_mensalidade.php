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
	        <label for="inputEmail3" class="col-sm-2 control-label">Mês</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="mes" placeholder="Informe o nome">
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="inputEmail3" class="col-sm-2 control-label">Ano</label>
	        
	        <div class="col-sm-10">
	          <input type="text" class="form-control" name="ano" placeholder="Informe o apelido">
	        </div>
	      </div>

	      <
	   
	      
	      <div class="form-group">
	        <div class="col-sm-offset-2 col-sm-10">
	          <button type="submit" class="btn btn-success">Cadastrar</button>
	        </div>
	      </div>
	    </form>
	  </div>
	</div>
</div>