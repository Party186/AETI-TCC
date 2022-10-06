<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="../../css/style-aprender-modulos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
        include "../../config.php";
        include DIR_PATH."/template/nav.php";
        ?>
        <div>
        <div>
          <h1 id="titulo">Seção 1</h1>
        </div>
    <ol>
        <a href="aprender_html_1.php">
            <li class="list-group-item d-flex justify-content-center">
            <div class="ms-2 me-auto">
            <div id="secao-modulos" class="fw-bold">1 - Instalando VSCode e Preparando a página principal</div>
                1 min
            </div>
            </li>
        </a>
        <a href="aprender_html_recado.php">
            <li class="list-group-item d-flex justify-content-center">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Recado rápido importante!</div>
                1 min
            </div>
            </li>
        </a>
        <a href="aprender_html_2.php">
            <li class="list-group-item d-flex justify-content-center">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Aula 2 - Criando nosso primeiro site</div>
                10 min
            </div>
            </li>
        </a>
        <a href="aprender_html_3.php">
            <li class="list-group-item d-flex justify-content-center">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Aula 3 - Divs e Sections</div>
                6 min
            </div>
            </li>
        </a>
        <a href="aprender_html_4.php">
            <li class="list-group-item d-flex justify-content-center">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Aula 4 - Inputs e Buttons, modelo página de login</div>
                8 min
            </div>
            </li>
        </a>
    </ol>
    </div>
</body>