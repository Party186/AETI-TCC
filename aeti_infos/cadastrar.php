<?php 
session_start();
require DIR_PATH.'\conexao.php';
$usuario = mysqli_real_escape_string($connect, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($connect, trim($_POST['senha']));
$nome = mysqli_real_escape_string($connect, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($connect, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($connect, trim(md5($_POST['email'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: login.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, sobrenome, usuario, senha, email) VALUES ('$nome', '$sobrenome', '$usuario', md5('$senha'), '$email')";

if($connect->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$connect->close();

header('Location: login.php');
exit;
?>