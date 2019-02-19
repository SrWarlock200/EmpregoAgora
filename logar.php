<?php
include('conexao.php');
$email = $_POST['email'];
$query = 'SELECT * FROM `cadastros` WHERE email = "'.$email.'" limit 1';
$resultado = mysqli_query($conexao, $query);
$contagem = mysqli_num_rows($resultado);
if($contagem >= 1){
    $key = sha1(md5(time()));
    while($exibe = mysqli_fetch_assoc($resultado)){
        $nome = $exibe['nome'];
        $idvaga = $exibe['idvaga'];
    }
    ?>
<html lang="pt-br"><head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>EmpregoAgora.Online - O Seu Site De Empregos!</title>
  </head>
  <body style="background-color: #15B597">
        
      
      <div class="container">
          <div class="row" style="height:8%"></div>
      <div class="py-3 text-center" style="">        
        <h1 style="color:#FFFFFF"><?=$nome?>, estamos validando seu perfil</h1>     
          
         <hr style="height: 1px;width:100%;display:block;margin: 9px 0;overflow: hidden">
        <p class="py-2" style="color: #FFFFFF; font-size: 25px;">Em alguns dias, te notificaremos sobre a ativação por sms e email, é de extrema importancia manter o aplicativo instalado no seu celular.</p>
      </div>

      <div class="row">
        <div class="col py-2" style=";position: fixed;right: 0;left: 0;bottom: 0;text-align: center;">
          <form method="post" action="squeezy.php?key=<?=$key?>&amp;id=<?=$idvaga?>">
          <button type="submit" class="btn btn-block btn-lg py-3" style="background-color: #FFFFFF; color: #000000;font-size: 25px;border-radius:35px;">Compartilhar</button>
          </form>
        </div>        
      </div>

      <footer class="my-3 pt-3 text-center text-small" style="color: #FFFFFF">
        <p class="mb-1">© 2018-2019 EmpregoAgora</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  




    </body></html>


    <?php
}else{
    header('location: login.php?error=1');
};
?>