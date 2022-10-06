<?php
session_start();
error_reporting(0);
require "config.php";
if(!isset($_SESSION['autenticado']) ||  $_SESSION['autenticado'] != 'sim'){
  header ("Location: http://localhost/aeti/login.php?login=erro");
  $_SESSION['autenticado'] = "nao";
}
?>