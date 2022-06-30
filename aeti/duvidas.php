<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AETI - Auxilio para Estudantes Técnicos em Informática</title>
        <link rel="stylesheet" href="css/style-duvidas.css">
        <link rel="stylesheet" href="css/style-principal.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
      </head>
</head>
<body>
  <?php 
    require "config.php";
    include DIR_PATH."/nav.php";
    ?>
  <h1 id="duvidas">Dúvidas frequentes</h1>
  <div class="container">
  <div class="row align-items-start">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="card">
            <img id="img" src="https://www.datocms-assets.com/14946/1590690600-front-end-back-end-1080x608.png?auto=format" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Front-end ou Back-end</h5>
              <p class="card-text">Descubra em qual você melhor se encaixa, seja estudando ou até mesmo fazendo um quiz para lhe testar!</p>
              <div class="d-grid gap-2">
                <a href="aprender_html.php"><button class="btn btn-dark" type="button">Visitar</button></a>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="card">
            <img id="img"  src="https://s.profissionaisti.com.br/wp-content/uploads/2018/04/esquema-funcionamento-devops-carreira-tecnologia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Como seguir na carreira</h5>
              <p class="card-text">Veja os primeiros passos para ser um DEV e o que acontece dentro do mercado de trabalho para você seguir em frente!</p>
              <div class="d-grid gap-2">
                <a href="aprender_html.php"><button class="btn btn-dark" type="button">Visitar</button></a>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="card">
            <img id="img"  src="http://www.segurisoft.es/wp-content/uploads/2017/01/tv-streaming-internacional-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Canais de programação</h5>
              <p class="card-text">Canais especializados e indicados sobre o mundo da programação, para você visitar e aprender mais sobre a programação!</p>
              <div class="d-grid gap-2">
                <a href="duvidas-canais.php"><button class="btn btn-dark" type="button">Visitar</button></a>
              </div>
            </div>
          </div>
    </div>
  </div>
  <h1 id="duvidas">Perguntas que não se calam</h1>
  <div id="perguntas" class="row align-items-start">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta1" aria-expanded="false" aria-controls="pergunta1">
                Espaço sobrando na página
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="pergunta1">
              <div class="card card-body" style="width: 300px;">
                Provavelmente você definiu algum elemento com o width maior que 100, ou algo está sobrescrevendo este width. Tente ir para a página e utilizar o inspecionar para achar o espaço sobrando!
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta2" aria-expanded="false" aria-controls="pergunta2">
                Linkar css ao html
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="pergunta2">
              <div class="card card-body" style="width: 300px;">
                Utilize na tag Head o comando: link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" 
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta3" aria-expanded="false" aria-controls="pergunta3">
                Div ou container?
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="pergunta3">
              <div class="card card-body" style="width: 300px;">
                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
              </div>
            </div>
          </div>          
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta4" aria-expanded="false" aria-controls="pergunta4">
                Como me organizo melhor?
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="pergunta4">
              <div class="card card-body" style="width: 300px;">
                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta5" aria-expanded="false" aria-controls="pergunta5">
                Imagem se repetindo no background
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="pergunta5">
              <div class="card card-body" style="width: 300px;">
                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pergunta6" aria-expanded="false" aria-controls="pergunta6">
                Como verificar erros no console
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="pergunta6">
              <div class="card card-body" style="width: 300px;">
                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
              </div>
            </div>
          </div>          
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>