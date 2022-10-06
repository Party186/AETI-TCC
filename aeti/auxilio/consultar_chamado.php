<?php 
require "../config.php";  
require_once "../validador_acesso.php";

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
    <title>AETI - Auxilio para Estudantes Técnicos em Informática</title>

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
      include DIR_PATH."../template/nav.php";
    ?>
    <h1 id="Ajude">Ajude alguem com suas dúvidas</h1>
    <div class="container">    
      <div class="row">
        <div class="card-consultar-chamado">
        <div class="card">
          <h5 class="card-header">Questões apresentadas no momento</h5>
          <input id="searchbar" class="form-control me-2" onkeyup="search_pergunta()" type="search" placeholder="Pesquisar perguntas" aria-label="Search">
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
            <div id="infos">
              <h5 class="card-title"><?php echo $chamado_dados[0];?></h5>
              <p class="card-text"><?php echo "Linguagem: ".$chamado_dados[1];?></p>
              <p id = "text-2" class="card-text 2"><?php echo $chamado_dados[2];?></p>
              <a href="#" id="btn-responder" class="btn btn-primary">Responder</a>
            <?php } ?>
            </div>
            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="../auxilio.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    function search_pergunta() {
    let input = document.getElementById('searchbar').value
    console.log(input);
    input=input.toLowerCase();
    let z = document.getElementsByClassName('card-title');
    let y = document.getElementsByClassName('card-text');
    let c = document.getElementsByClassName('card-text 2');
    let x = document.getElementsByClassName('btn btn-primary');
      
    for (i = 0; i < z.length; i++) { 
        if (!z[i].innerHTML.toLowerCase().includes(input)) {
            z[i].style.display="none";
            x[i].style.display="none";
            y[i].style.display="none";
            c[i].style.display="block";
        }
        else {
          z[i].style.display="block";
          c[i].style.display="block";
            x[i].style.display="block";
            y[i].style.display="block";   
        }
    }
    }
  </script>
</html>