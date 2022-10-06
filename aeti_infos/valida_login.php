<?php
session_start();
require DIR_PATH.'/conexao.php';
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
}

$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, md5($_POST['senha']));
 
$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($connect, $query);
 
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['autenticado'] = 'sim';
    header ('Location: principal.php');
	$_SESSION['user'] = $_POST['usuario'];
	
} else{
	$_SESSION['loginErro'] = true;
    $_SESSION['autenticado'] = 'nao';
	header ('Location: login.php?login=erro');
}
?>