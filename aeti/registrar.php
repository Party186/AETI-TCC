<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-re.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Registre-se</title>
    </head>
    <body>
        <div id="secao">
          <h2 id="txt">Registre-se</h2>
          <form method="post" action="cadastrar.php" class="row g-3">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Nome</label>
              <input name="nome" type="text" class="form-control" id="validationDefault01" value="" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault02" class="form-label">Sobrenome</label>
              <input name="sobrenome" type="text" class="form-control" id="validationDefault02" value="" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault02" class="form-label">Email</label>
              <input name="email" type="text" class="form-control" id="validationDefault02" value="" required>
            </div>
            <div class="col-md-4">
              <label for="validationDefaultUsername" class="form-label">Usuário</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input name="usuario" type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationDefault02" class="form-label">Senha</label>
              <input name="senha" type="password" class="form-control" id="validationDefault02" value="" required>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Aceite os termos de condição!
                </label>
              </div>
            </div>
            <div class="col-12">
              <button name="botao-s" class="btn btn-primary" type="submit">Registar</button>
              
            </div>
          </form>
        </div>
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>