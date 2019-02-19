<?php
if(isset($_GET['i'])){
    $id = $_GET['i'];
    $indicacao = $_GET['r'];
    $key = sha1(md5(time()));

header('Location: vaga.php?id='.$id.'&key='.$key.'&reffer='.$indicacao.'');
} else{
    header('Location: https://google.com.br');
};
