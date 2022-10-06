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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
    include DIR_PATH."/template/nav.php";
    ?>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div>
                <h1 id="nome-perfil" class="text-center"><?php echo $_SESSION['user']; ?></h1>
            </div>
                <figure id="img-perfil" class="figure">
                    <img src="http://www.rachegebran.com.br/wp-content/uploads/perfil.jpg" class="figure-img img-fluid rounded" alt="...">
                </figure>
                <a href="emconstrucao.php"><img id="add" src="data:image/png;base64,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"></a>
                <a href="emconstrucao.php"><img id="add" src="imagens/dinheiro-logo.png"></a>
                <h5 id="tag">Ingressou em: <?php echo "10/05/2022" ?></h5>
                <h5 id="tag">Valor doado: R$0</h5>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h1 id="eu">Sobre mim</h1>
                <h3 id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dolor libero, bibendum eu ullamcorper bibendum, porta nec metus. Vestibulum sagittis molestie egestas. Duis eleifend ultricies la</h3>
            </div>
        </div>
    </div>
</body>