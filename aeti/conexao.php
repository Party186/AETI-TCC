<?php 
  require "config.php";
?>
<?php 

define("host", "127.0.0.1");
define("user", "root");
define("senha", "");
define("db", "login");

$connect = mysqli_connect(host, user, senha, db) or die ("Não foi possivel conectar");
?>