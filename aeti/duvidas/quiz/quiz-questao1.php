<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
  <body>
    <?php 
        include "../../template/nav.php";
        $_SESSION['questao'] = 0;
        $_SESSION['back'] = 0;
        $_SESSION['front'] = 0;
    ?>
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-5">
                <div class="site-heading">
                    <h1>O que você prefere?</h1>
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
    
</br>
    <div class="container px-8 px-lg-8" >
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-3" id="top">
                <div id="opcoes" class="btn-group-vertical justify-content-center" role="group" aria-label="Vertical button group">
                    <a href="front.php"><button type="button" class="btn btn-dark btn-lg">Criar o design</button></a>
                    </br>
                    <a href="back.php"><button type="button" class="btn btn-dark btn-lg">Trabalhar com soluções</button></a>
                    </br>
                    <a href="full.php"><button type="button" class="btn btn-dark btn-lg">Gosto de fazer uma página por completo</button></a>
                    </br>
                    <a href="full.php"><button type="button" class="btn btn-dark btn-lg">Não sei ainda</button></a>
                    </br>
                </div>
            </div>
        </div>
    </div>
    <style>
#top{margin-top:9vh;
}

    </style>
    </body>
    <!--Gosto de fazer uma página por completo-->
</html>