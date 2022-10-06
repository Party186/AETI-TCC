<?php
session_start();
error_reporting(0);
require "C:\\xampp\htdocs\aeti/config.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo URL_BASE;?>/css/style-principal.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a id="aeti" class="navbar-brand">AETI</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a id="elementos-nav" class="nav-link active" aria-current="page" href="<?php echo URL_BASE?>/principal.php">Início</a>
                </li>
                <li class="nav-item">
                    <a id="elementos-nav" class="nav-link active" aria-current="page" href="<?php echo URL_BASE;?>/aprender.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a id="elementos-nav" class="nav-link active" aria-current="page" href="<?php echo URL_BASE;?>/duvidas.php">Dúvidas</a>
                </li>
                <li class="nav-item">
                    <a id="elementos-nav" class="nav-link active" aria-current="page" href="<?php echo URL_BASE;?>/auxilio.php">Auxilio</a>
                </li>
                <li id="perfil-item" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php 
                  if($_SESSION['autenticado'] == 'sim'){
                    echo $_SESSION['user'];
                  }else{
                    echo "Entrar";
                  } 
                ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                      <?php
                        if($_SESSION['autenticado'] == 'sim'){
                      ?>
                      <li><a class="dropdown-item" href="<?php echo URL_BASE;?>/perfil.php">Meu Perfil</a></li>
                      <li><a class="dropdown-item" href="#">Configurações</a></li>
                      <li><a class="dropdown-item" href="<?php echo URL_BASE;?>/logoff.php">Deslogar</a></li>
                      <?php
                    }else{
                      ?>
                      <li><a class="dropdown-item" href="<?php echo URL_BASE;?>/login.php">Login</a></li>
                      <li><a class="dropdown-item" href="<?php echo URL_BASE;?>/registrar.php">Registrar-se</a></li>
                      <?php
                    }
                      ?>
                </ul>
              </li>
              </ul>
            </div>
          </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>