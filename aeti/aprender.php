<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-aprender.css">
        <link rel="stylesheet" href="css/style-principal.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
    require "config.php";
    include DIR_PATH."/nav.php";
    ?>
        <div id="imagens">
            <h1 id="titulos">Crie sites do zero</h1>
            <div class="container">
                <div class="row align-items-start">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img id="imgs" src="imagens/aprender-html.png" class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img id="imgs" src="imagens/aprender-css.png" class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img id="imgs" src="imagens/aprender-js.png" class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <img id="imgs" src="imagens/aprender-bootstrap.png" class="img-fluid" alt="...">
                  </div>
                </div>
            </div>
        </div>
        <div id="comece">
            <h1 id="titulos">Comece por aqui!</h1>
            <ul class="list-group list-group-flush">
                <a href="aprender_modulos.php"><li class="list-group-item">Ver todos os módulos</li></a>
                <a href="aprender_html.php"><li class="list-group-item">#1 HTML</li></a>
                <a href="aprender_css.php"><li class="list-group-item">#2 CSS</li></a>
                <a href="aprender_js.php"><li class="list-group-item">#3 JavaScript</li></a>
                <a href="aprender_bootstrap.php"><li class="list-group-item">#4 BootStrap</li></a>
                <a href="aprender_php.php"><li class="list-group-item">#5 PHP</li></a>
              </ul>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>