<?php
    include_once("dash_menu.php");
?>
<div class="elenco col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <button type="button" class="btn btn-success pull-right">Cadastrar Comissão</button>
          <button type="button" class="btn btn-success pull-right btn-comissao">Cadastrar Função</button>
          <h1 class="page-header">Comissão Técnica</h1>
          

            <div class="row placeholders">
            
              <?php 
              $buscarUsu=$pdo->prepare("SELECT * FROM usuarios WHERE id_cargo=1 LIMIT 1");

              $buscarUsu->execute();

              $linha=$buscarUsu->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarU) {
                $id = $listarU->id;
                $imagem = $listarU->imagem;
                $nome = $listarU->nome;
              }

              $buscarCarg=$pdo->prepare("SELECT * FROM cargos WHERE id=1 LIMIT 1");

              $buscarCarg->execute();

              $linha=$buscarCarg->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarC) {
                $id = $listarC->id;
                $nome = $listarC->nome;
              }

            ?>

            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../imagens/<?php echo $imagem; ?>" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><?php echo $listarC->nome; ?></h4>
              <span class="text-muted"><?php echo $listarU->nome; ?></span>
            </div>

            <?php 
              $buscarUsu=$pdo->prepare("SELECT * FROM usuarios WHERE id_cargo=2 LIMIT 1");

              $buscarUsu->execute();

              $linha=$buscarUsu->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarU) {
                $id = $listarU->id;
                $imagem = $listarU->imagem;
                $nome = $listarU->nome;
              }

              $buscarCarg=$pdo->prepare("SELECT * FROM cargos WHERE id=2 LIMIT 1");

              $buscarCarg->execute();

              $linha=$buscarCarg->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarC) {
                $id = $listarC->id;
                $nome = $listarC->nome;
              }
            ?>

            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../imagens/<?php echo $imagem; ?>" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><?php echo $listarC->nome; ?></h4>
              <span class="text-muted"><?php echo $listarU->nome; ?></span>
            </div>

            <?php 
              $buscarUsu=$pdo->prepare("SELECT * FROM usuarios WHERE id_cargo=3 LIMIT 1");

              $buscarUsu->execute();

              $linha=$buscarUsu->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarU) {
                $id = $listarU->id;
                $imagem = $listarU->imagem;
                $nome = $listarU->nome;
              }

              $buscarCarg=$pdo->prepare("SELECT * FROM cargos WHERE id=3 LIMIT 1");

              $buscarCarg->execute();

              $linha=$buscarCarg->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarC) {
                $id = $listarC->id;
                $nome = $listarC->nome;
              }
            ?>

            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../imagens/<?php echo $imagem; ?>" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><?php echo $listarC->nome; ?></h4>
              <span class="text-muted"><?php echo $listarU->nome; ?></span>
            </div>

            <?php 
              $buscarUsu=$pdo->prepare("SELECT * FROM usuarios WHERE id_cargo=4 LIMIT 1");

              $buscarUsu->execute();

              $linha=$buscarUsu->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarU) {
                $id = $listarU->id;
                $imagem = $listarU->imagem;
                $nome = $listarU->nome;
              }

              $buscarCarg=$pdo->prepare("SELECT * FROM cargos WHERE id=4 LIMIT 1");

              $buscarCarg->execute();

              $linha=$buscarCarg->fetchAll(PDO::FETCH_OBJ);
                    
              foreach ($linha as $listarC) {
                $id = $listarC->id;
                $nome = $listarC->nome;
              }
            ?>

            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../imagens/<?php echo $imagem; ?>" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><?php echo $listarC->nome; ?></h4>
              <span class="text-muted"><?php echo $listarU->nome; ?></span>
            </div>
          </div>


          <?php 
            $buscarUsu=$pdo->prepare("SELECT * FROM usuarios ORDER BY id_cargo");

            $buscarUsu->execute();

            $linha=$buscarUsu->fetchAll(PDO::FETCH_OBJ);
          ?>

          <h2 class="sub-header">Comissão Técnica (Completa)</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Cargo</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <?php

                  foreach ($linha as $listarU) {
                    echo "<tr>";
                      echo "<td>".$listarU->nome."</td>";

                      $buscarCarg=$pdo->prepare("SELECT * FROM cargos WHERE id=:id");

                      $buscarCarg->bindValue(":id", $listarU->id_cargo);

                      $buscarCarg->execute();

                      $linha=$buscarCarg->fetchAll(PDO::FETCH_OBJ);
                            
                        foreach ($linha as $listarC) {
                          
                          echo "<td>".$listarC->nome."</td>";
                        }
                      echo "<td>".$listarU->email."</td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>