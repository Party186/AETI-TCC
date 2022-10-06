<?php 
  require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-auxilio.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
    include DIR_PATH."/template/nav.php";
    ?>
    <h1 id="peca">Peça ajuda ou ajude alguém</h1>
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Pedir ajuda</h2>
          <p>Precisando de ajuda? Relaxa, sempre tem alguém que pode ajudar!</p>
          <a href="<?php echo URL_BASE;?>/auxilio/abrir_chamado.php"><button class="btn btn-outline-light" type="button">Pedir</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Ajudar alguém</h2>
          <p>Ensine, aprenda e ajude!</p>
          <a href="<?php echo URL_BASE;?>/auxilio/consultar_chamado.php"><button class="btn btn-outline-secondary" type="button">Ajudar</button></a>
        </div>
      </div>
    </div>
</body>
</html>