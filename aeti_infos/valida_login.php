<?php
session_start();
require DIR_PATH.'/conexao.php';
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);
 
$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($connect, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['autenticado'] = 'sim';
    header ('Location: principal.php');
	exit();
} else{
    $_SESSION['autenticado'] = 'nao';
	header ('Location: login.php?login=erro');
}
?>