<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagens/carrosel1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagens/carossel2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagens/carrosel3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div>
          <h1 id="quem">QUEM SOMOS?</h1>
          <h5 id="somos">Somos um grupo escolar dedicado a realiza????o do projeto AETI (Aux??lio para Estudantes T??cnicos em Inform??tica), qual ?? apresentado como trabalho de conclus??o de curso do grupo de inform??tica!</h5>
        </div>
        <div>
          <h1 id="quem">Objetivos do projeto</h1>
        </div>
        <br>
        <div id="card" class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://conceitos.com/wp-content/uploads/tecnologia/Programacao.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ensinar programa????o</h5>
                <p class="card-text">Desenvolver um sistema de ensino de f??cil acesso para aqueles que desejam saber mais sobre o mundo da programa????o.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://cartpanda.com/wp-content/uploads/2020/11/image-15.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Disponibilizar um chat relacionado a programa????o</h5>
                <p class="card-text">Proporcionar um chat onde seja poss??vel o contato de programadores com outros programadores, para que ocorra uum aux??lio entre os mesmos.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://res.cloudinary.com/dte7upwcr/image/upload/v1618959177/blog/blog2/curso-de-programacao/curso-de-programacao-img_header.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Auxiliar quem est?? perdido na ??rea</h5>
                <p class="card-text">Fornecer uma aba de ajuda para aqueles que n??o sabem como seguir na ??rea e nem por onde come??ar.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://apexensino.com.br/wp-content/uploads/2020/06/aprender-a-programar.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Realizar uma aba organizacional</h5>
                <p class="card-text">Aba destinada a pessoas que desejam se organizar com tarefas.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card"src="https://www.digitalhouse.com/br/blog/content/images/2022/03/DH_blog_lkd_06.01.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Proporcionar uma aba de erros gerais</h5>
                <p class="card-text">Aba com erros gerais e de f??cil resolu????o que o grupo do projeto encontrou ao decorrer do curso.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img id="img-card" src="https://s2.glbimg.com/a5PD_-YSkGgff6C0tCBXPvrBUoA=/620x430/e.glbimg.com/og/ed/f/original/2022/05/09/art-rachen-yjpjld3c9bu-unsplash.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sistema de recompensas para usu??rios</h5>
                <p class="card-text">Sistema de moedas do site, onde voc?? consegue colocar seus erros e outras pessoas s??o recomnpensadas com moedas, onde futuramente gerar??o recompensas.</p>
              </div>
            </div>
          </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>