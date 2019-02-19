<?php
$host = 'localhost';
$usuario = 'root';
$senhadb = '';
$banco = 'app';

$conexao = mysqli_connect($host,$usuario,$senhadb,$banco);
mysqli_set_charset($conexao,"utf8");
?>