<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style-aprender-modulos.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
        include "../../config.php";
        include DIR_PATH."/template/nav.php";
        ?>
        <h1 id="titulo">Aula 3 - Divs e Sections</h1>
        <div class="ratio ratio-16x9">
            <iframe id="video" src="https://www.youtube.com/embed/Sn08kVY3l9E" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div>
        <div id="div-bot" class="row align-items-start">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href="aprender_html_2.php">
                    <ul>
                        <li class="list-group-item d-flex justify-content-center" id="anterior">Anterior</li>
                    </ul>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
            <a href="aprender_html_4.php">
                    <ul>
                        <li class="list-group-item d-flex justify-content-center">Próximo</li>
                    </ul>
                </a>
            </div>
        </div>
        <?php 
            include DIR_PATH."/cursos/html/aprender_html_modulos.php";
        ?>
    </body>