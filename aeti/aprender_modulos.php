<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-principal.css">
        <link rel="stylesheet" href="css/style-aprender-modulos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
        require "config.php";
        include DIR_PATH."/nav.php";
        ?>
        <div>
          <h1 id="titulo">Comece na carreira de desenvolvedor!</h1>
        </div>
        <div id="card" class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="imagens/aprender-html.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 1 - HTML</h5>
                <p class="card-text">Crie a base visual dos sites e aprenda a construir sites desde o inicio. Com o HTML você consegue realizar a base estrutural do seu site, inserir imagens, textos, botões e muitos outros componentes que compõem seu site.</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="aprender_html.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="imagens/aprender-css.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 2 - CSS</h5>
                <p class="card-text">Desenvolva o visual do seu site. Aprenda a customizar seu site, com diferentes cores e visuais que facilitam e melhoram a vista do público perante à aplicação web!</p>
                <p class="card-text">3 Horas de vídeo</p>
                <div class="d-grid gap-2">
                    <a href="aprender_css.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>   
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="imagens/aprender-js.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 3 - JavaScript</h5>
                <p class="card-text">Comece a programar, aprenda o básico da programação e inicie com projetos reais. Desenvolva funções para os elementos do site, como botões que levam a locais e até mesmo cálculos dinâmicos!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="aprender_js.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="imagens/aprender-bootstrap.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 4 - BootStrap</h5>
                <p class="card-text">Faça designs responsíveis e de maneira fácil, com a ferramenta BootStrap tudo fica mais fácil!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="aprender_bootstrap.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="imagens/aprender-java.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 5 - Java</h5>
                <p class="card-text">Linguagem de programação, onde você consegue desenvolver back-end e aplicações que recebem contato com os servidores!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="aprender_php.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
        </div>
    </body>