<?php 
    include "../../template/nav.php";
    if(!isset($_SESSION['questao']) && $_SESSION['questao']<2){
        header("Location: quiz-questao1.php");
    }
?>
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
    <header class="masthead" <?php if($_SESSION['front'] > $_SESSION['back']){
        ?>
            style="background-image: url('https://wallpapercave.com/wp/wp4974478.jpg')"
        <?php
    }else if($_SESSION['front'] < $_SESSION['back']){
        ?>
            style="background-image: url('https://wallpapercave.com/wp/wp10318694.png')"
        <?php
    }else if($_SESSION['front'] == $_SESSION['back']){
        ?>
            style="background-image: url('https://www.fecaf.com.br/wp-content/uploads/2021/03/Full-Stack-Development-Design-Egineering-Deployment_FECAF.jpg')"
        <?php
    }
    ?>
    >
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Você se encaixa melhor em<?php 
                        if($_SESSION['front'] > $_SESSION['back']){
                        echo " Front-End.";
                        }else if($_SESSION['front'] < $_SESSION['back']){
                        echo " Back-End.";
                        }else if($_SESSION['front'] == $_SESSION['back']){
                        echo " Full-Stack.";
                        }
                        ?></h1>
                        <span class="subheading"></span>
                </div>
            </div>
        </div>
    </header>
    <?php if($_SESSION['front'] > $_SESSION['back']){
        ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <p class="post-meta">
                        Um desenvolvedor front-end é aquele que desenvolve a "frente" do site ou aplicativo
                        como apresentação, design, linguagens, cores, entre outros, ou seja, aquilo que é visivel para o usuário.
                        Essa parte é chamada de <strong>interface de usuário</strong> pois é nela que
                        o usuário interage sem precisar saber programação.
                    </p>
                </div>
                </div>
            </div>
        </div>
        <?php
    }else if($_SESSION['front'] < $_SESSION['back']){
        ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <p class="post-meta">
                        Um desenvolvedor back-end é aquele que desenvolve a parte de "trás" do site ou aplicativo
                        possibilitando as operações do sistema como servidores, bancos de dados, segurança, estrutura,
                        gerenciamento de conteúdo e atualizações.
                        Ou seja, <strong>tudo aquilo que não é visivel para o usuário.</strong> 
                    </p>
                </div>
                </div>
            </div>
        </div>
        <?php
    }else if($_SESSION['front'] == $_SESSION['back']){
        ?>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <p class="post-meta">
                        Um desenvolvedor fullstack é aquele que consegue trabalhar no tanto com front-end quanto back-end,
                        muitas pessoas se profissionalizam em apenas um desses quesitos, por talvez não gostar de trabalhar
                        desenvolvendo a outra parte.
                        </br>
                        <strong>
                        Os desenvolvedores fullstack são bem valorisados no mercado de trabalho por conta de seu conhecimento
                        em ambas as áreas(front-end e back-end).
                        </strong>  
                    </p>
                </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    

      <style>
        header.masthead {
        position: relative;
        margin-bottom: 3rem;
        padding-top: calc(8rem + 57px);
        padding-bottom: 8rem;
        background: no-repeat center center;
        background-color: #6c757d;
        background-size: cover;
        background-attachment: scroll;
        }
      </style>
</body>
    <?php 
       unset($_SESSION['front']);
       unset($_SESSION['back']);
       unset($_SESSION['questao']);
    ?>
</html>