<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style-aprender-modulos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
        <!-- <script type="text/javascript">
          function countDown(secs) {
              var btn = document.getElementById('btn');
              btn.value = "Faltam "+secs+" dias";<!--texto que aparecerá enquanto o tempo descer, não altere o"+secs+"-->
               <!--if(secs < 1) {
                  clearTimeout(timer);
                  btn.disabled = false;
                  btn.value = 'OK clique aqui';
              }
              secs--;
              var timer = setTimeout('countDown('+secs+')',100000);
          }
          </script> -->
      </head>
    <body>
        <?php 
        include "../config.php";
        include DIR_PATH."/template/nav.php";
        if($_SESSION["insricao-msg"]){
          ?>
          <div class="alert alert-success" role="alert">
            Sua inscrição foi realizada com sucesso!
          </div>
          <?php
          unset($_SESSION['insricao-msg']);
        }
        ?>
        <div>
          <h1 id="titulo">Comece na carreira de desenvolvedor!</h1>
        </div>
        <div id="card" class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="../imagens/aprender-html.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 1 - HTML</h5>
                <p class="card-text">Crie a base visual dos sites e aprenda a construir sites desde o inicio. Com o HTML você consegue realizar a base estrutural do seu site, inserir imagens, textos, botões e muitos outros componentes que compõem seu site.</p>
                <p class="card-text">3 Horas de vídeo</p> 
                <div class="d-grid gap-2">
                    <a href="html/aprender_html.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="../imagens/aprender-css.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 2 - CSS</h5>
                <p class="card-text">Desenvolva o visual do seu site. Aprenda a customizar seu site, com diferentes cores e visuais que facilitam e melhoram a vista do público perante à aplicação web!</p>
                <p class="card-text">2 Horas de vídeo</p>
                <div class="d-grid gap-2">
                    <a href="aprender_css.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>   
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="../imagens/aprender-js.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Módulo 3 - JavaScript</h5>
                <p class="card-text">Comece a programar, aprenda o básico da programação e inicie com projetos reais. Desenvolva funções para os elementos do site, como botões que levam a locais e até mesmo cálculos dinâmicos!</p>
                <p class="card-text">4 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="aprender_js.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="../imagens/aprender-bootstrap.png" class="card-img-top" alt="...">
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
              <img id="img-card"src="../imagens/aprender-java.png" class="card-img-top" alt="...">
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


        




        <div>
          <h1 id="titulo">Cursos Profissionais</h1>
        </div>
        <div id="card" class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://www.opus-software.com.br/wp-content/uploads/2018/09/nodejs.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Node.JS</h5>
                <p class="card-text">Crie a base visual dos sites e aprenda a construir sites desde o inicio. Com o HTML você consegue realizar a base estrutural do seu site, inserir imagens, textos, botões e muitos outros componentes que compõem seu site.</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFJd5grFpFc_hqrFQv3Fp6hAVf0aDaluXdTbhrNB_J5aM_qYl7CeIh5BDujhiT4th39Wo&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Docker</h5>
                <p class="card-text">Desenvolva o visual do seu site. Aprenda a customizar seu site, com diferentes cores e visuais que facilitam e melhoram a vista do público perante à aplicação web!</p>
                <p class="card-text">3 Horas de vídeo</p>
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>   
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://conteige.cloud/wp-content/uploads/2021/08/Ruby_on_Rails-Logo.wine_.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ruby on Rails</h5>
                <p class="card-text">Comece a programar, aprenda o básico da programação e inicie com projetos reais. Desenvolva funções para os elementos do site, como botões que levam a locais e até mesmo cálculos dinâmicos!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://programadorviking.com.br/wp-content/uploads/2019/02/javascript-porque-voce-deve-aprender-essa-linguagem.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">JavaScript ao Profissional</h5>
                <p class="card-text">Faça designs responsíveis e de maneira fácil, com a ferramenta BootStrap tudo fica mais fácil!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="https://miro.medium.com/max/900/1*OrjCKmou1jT4It5so5gvOA.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Vue.js</h5>
                <p class="card-text">Linguagem de programação, onde você consegue desenvolver back-end e aplicações que recebem contato com os servidores!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="https://www.meioemensagem.com.br/wp-content/uploads/2021/02/inteligencia-artificial-.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Inteligência Artificial</h5>
                <p class="card-text">Linguagem de programação, onde você consegue desenvolver back-end e aplicações que recebem contato com os servidores!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="https://blog-geek-midia.s3.amazonaws.com/wp-content/uploads/2020/08/06103546/comandos-git.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Git</h5>
                <p class="card-text">Linguagem de programação, onde você consegue desenvolver back-end e aplicações que recebem contato com os servidores!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="https://blog.masterdaweb.com/wp-content/uploads/2019/08/mysql-logo-png-transparent.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">MySql</h5>
                <p class="card-text">Linguagem de programação, onde você consegue desenvolver back-end e aplicações que recebem contato com os servidores!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="https://img.olhardigital.com.br/wp-content/uploads/2020/11/20201112043441-1000x450.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ethical hacking</h5>
                <p class="card-text">Linguagem de programação, onde você consegue desenvolver back-end e aplicações que recebem contato com os servidores!</p>
                <p class="card-text">3 Horas de vídeo</p>  
                <div class="d-grid gap-2">
                    <a href="emconstrucao.php"><button class="btn btn-dark" type="button">Aprender</button></a>
                </div>
            </div>
            </div>
          </div>
        </div>




        <div>
          <h1 id="titulo">Próximos eventos ao vivo</h1>
        </div>
        <div id="card" class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://www.opus-software.com.br/wp-content/uploads/2018/09/nodejs.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Curso ao vivo de NoSQL</h5>
                <p class="card-text">Crie a base visual dos sites e aprenda a construir sites desde o inicio. Com o HTML você consegue realizar a base estrutural do seu site, inserir imagens, textos, botões e muitos outros componentes que compõem seu site.</p>
                <?php

                $hoje = time();

                $quando = mktime(14,0,0,07,15,2022);

                $countdown = round(($quando - $hoje)/86400);

                echo "Faltam $countdown dias para o evento começar";

                ?> 
                <br></br>
                <div class="d-grid gap-2">
                    <a href="<?php if($_SESSION["autenticado"] == "sim"){
                      echo 'verifica-inscricao.php';
                    }else{
                      echo '../inscrever_curso.php';
                    }?>"><button class="btn btn-dark" type="button">Inscrever-se</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRad_qMqYG2fj-WyIKhV4R1DhhOXLdKeNf0MhCileWU6RjOqjxP3TGJys4tz_BM7mxVCnE&usqp=CAU" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Curso Iniciando a Carreira de DEV</h5>
                <p class="card-text">Crie a base visual dos sites e aprenda a construir sites desde o inicio. Com o HTML você consegue realizar a base estrutural do seu site, inserir imagens, textos, botões e muitos outros componentes que compõem seu site.</p>
                <?php

                $hoje = time();

                $quando = mktime(14,0,0,07,18,2022);

                $countdown = round(($quando - $hoje)/86400);

                echo "Faltam $countdown dias para o evento começar";

                ?> 
                <br></br>
                <div class="d-grid gap-2">
                <a href="<?php if($_SESSION["autenticado"] == "sim"){
                      echo 'verifica-inscricao.php';
                    }else{
                      echo '../inscrever_curso.php';
                    }?>"><button class="btn btn-dark" type="button">Inscrever-se</button></a>
                </div>
            </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://static.imasters.com.br/wp-content/uploads/2018/06/22153245/php-post-1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Curso Princípios do PHP</h5>
                <p class="card-text">Crie a base visual dos sites e aprenda a construir sites desde o inicio. Com o HTML você consegue realizar a base estrutural do seu site, inserir imagens, textos, botões e muitos outros componentes que compõem seu site.</p>
                <?php

                $hoje = time();

                $quando = mktime(14,0,0,07,25,2022);

                $countdown = round(($quando - $hoje)/86400);

                echo "Faltam $countdown dias para o evento começar";

                ?> 
                <br></br>
                
                <div class="d-grid gap-2">
                <a href="<?php if($_SESSION["autenticado"] == "sim"){
                      echo 'verifica-inscricao.php';
                    }else{
                      echo '../inscrever_curso.php';
                    }?>"><button class="btn btn-dark" type="button">Inscrever-se</button></a>
                </div>
            </div>
            </div>
          </div>
        </div>
  </body>
<html>