<?php 
  require "config.php";
  error_reporting(0);
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style-log.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>login</title>
  </head>
  <body>
    <div id="secao">
        <h2 id="txt">Entre para continuar</h2>
        <?php 
            if($_SESSION['loginErro']){
              ?>
              <div class="alert alert-danger" role="alert">
                Usuário ou senha incorretos ou não existem
              </div>
              <?php
              unset($_SESSION['loginErro']);
            }
          ?>
        <form action="valida_login.php" method="post">
          <div class="col-md-12">
            <label for="validationDefault01" class="form-label">Usuário</label>
            <input name="usuario" type="text" class="form-control" id="validationDefault01" required>
          </div>
          <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" id="validationDefault02" value="" required>
          </div>
          <div id="botao" class="col-12">
            <button class="btn btn-primary" type="submit">Entrar</button>
          </div>
        </form>
        <a href="registrar.php"><h10>Não possui uma conta? Cadastre-se aqui!</h10></a>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>