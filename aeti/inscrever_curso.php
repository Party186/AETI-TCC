<?php 
  require "config.php";
?>
<html>
  <head>
    <meta charset="utf-8" />


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
      include DIR_PATH."/template/nav.php";
    ?>
    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Inscrever-se no curso
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Usuário</label>
                      <h8 name="usuario"><?php echo $_SESSION['user'];?></php></h8>
                    </div>

                    <div class="form-group">
                      <label>Nome Completo</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Nome">
                    </div>
                    
                    <div class="form-group">
                      <label>Escolaridade</label>
                      <select name="categoria" class="form-control">
                        <option>Ensino Fundamental Incompleto</option>
                        <option>Ensino Fundamental Completo</option>
                        <option>Ensino Médio Incompleto</option>
                        <option>Ensino Médio Completo</option>
                        <option>Ensino Superior Incompleto</option>
                        <option>Ensino Superior Completo</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Curso que irei participar</label>
                      <select name="categoria" class="form-control">
                        <option>Curso ao vivo de NoSQL</option>
                        <option>Curso iniciando a carreira de DEV</option>  
                      </select>
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