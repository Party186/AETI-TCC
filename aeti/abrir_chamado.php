<?php 
require_once "validador_acesso.php";
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="css/style-principal.css">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <?php 
      require "config.php";
      include DIR_PATH."/nav.php";
    ?>
    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Faça uma pergunta!
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Pergunta</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>HTML</option>
                        <option>CSS</option>
                        <option>JavaScript</option>
                        <option>Java</option>
                        <option>C</option>
                        <option>PHP</option>
                        <option>Python</option>
                        <option>Node</option>
                        <option>Ruby on Rails</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição da pergunta</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="auxilio.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Concluir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>