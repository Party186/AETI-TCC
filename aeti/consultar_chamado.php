<?php 
require_once "validador_acesso.php";
$chamados = array();

$arquivo = fopen('C:\\xampp\aeti_infos/arquivo.hd', 'r');

while(!feof($arquivo)){
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}
fclose($arquivo);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="css/style-principal.css">

    <style>
      .card-consultar-chamado {
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

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Ajude alguem com suas dúvidas
            </div>
              <div class="card-body">
              <?php 
              foreach($chamados as $chamado) { 
              ?>
              <?php 
                $chamado_dados = explode('#', $chamado);
                if(count($chamado_dados) < 3 ){
                  continue;
                }
              ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $chamado_dados[0];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[1];?></h6>
                    <p class="card-text"><?php echo $chamado_dados[2];?></p>

                  </div>
                </div>
              </div>
            <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="auxilio.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>