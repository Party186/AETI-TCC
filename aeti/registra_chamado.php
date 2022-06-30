<?php 
require_once "validador_acesso.php";
print_r($_POST);

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

$arquivo = fopen('C:\\xampp\aeti_infos/arquivo.hd', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header('location: abrir_chamado.php')
?>