<?php 
require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-perfil.css">
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
    <div>
        <h1 id="nome">Matheus Koftonjak Sauer</h1>
    </div>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <figure id="img-perfil" class="figure">
                    <img src="http://www.rachegebran.com.br/wp-content/uploads/perfil.jpg" class="figure-img img-fluid rounded" alt="...">
                </figure>
                <img id="add" src="https://cdn-icons-png.flaticon.com/512/1946/1946423.png">
                <img id="msg" src="imagens/mensagem-logo.png">
                <h4 id="lvl">Level 100</h4>
                <h5 id="tag">Ingressou em: 20/05/2022</h5>
                <h5 id="tag">Ajudou: 200 pessoas</h5>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h1 id="eu">Sobre mim</h1>
                <h3 id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dolor libero, bibendum eu ullamcorper bibendum, porta nec metus. Vestibulum sagittis molestie egestas. Duis eleifend ultricies la</h3>
                <h1 id="conquista">Conquistas</h1>
                <img id="medalha" src="https://images.emojiterra.com/google/android-nougat/512px/1f947.png" class="figure-img img-fluid rounded" alt="...">
                <img id="medalha" src="https://images.emojiterra.com/google/android-nougat/512px/1f947.png" class="figure-img img-fluid rounded" alt="...">
                <img id="medalha" src="https://images.emojiterra.com/google/android-nougat/512px/1f947.png" class="figure-img img-fluid rounded" alt="...">
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>