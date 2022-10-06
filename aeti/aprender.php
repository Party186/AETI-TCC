<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-aprender.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
    include "config.php";
    include DIR_PATH."/template/nav.php";
    ?>
        <div id="imagens">
            <h1 id="titulos">Crie sites do zero e aprenda com profissionais</h1>
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
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="cursos/aprender_modulos.php"><button id="botaoModulos" class="btn btn-primary" type="button">Ver Módulos</button></a>
        <div>
    </body>
</html>