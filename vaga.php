<?php 
include('conexao.php');
$id = $_GET['id'];
$key = $_GET['key'];
$queryvaga = "SELECT * FROM `vaga` WHERE id = {$id}";
$resultvaga = mysqli_query($conexao, $queryvaga);
while($exibe = mysqli_fetch_assoc($resultvaga)){
  $nome = $exibe['nome'];
  $salario = $exibe['salario'];
  $local = $exibe['local'];
  $descricao = $exibe['descricao'];
  $imagem = $exibe['imagem'];
  $squeezy = $exibe['squeezy'];
};
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>EmpregoAgora.Online - O Seu Site De Empregos!</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3F51B5;">

      <a class="navbar-brand" href="#">EmpregoAgora.<small>online</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav mr-auto">            
          <li class="nav-item active">
            <a class="nav-link" href="#">Vagas</a>
          </li>          
        <li class="nav-item active">
            <a class="nav-link" href="#">Login</a>
          </li>    
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Pesquisa">
        </form>
      </div>
    </nav>
      
      <div class="container">
      <div class="py-3 text-center">
        <img class="d-block mx-auto mb-4" style="border-radius: 25px;"src="img/cocacola.png" alt="" width="100" height="100">
        <h2><?=$nome?></h2>
          
          <div class="row py-1">
          <div class="col"><i class="fas fa-donate"></i> R$<?=$salario?></div>
            <div>|</div>
          <div class="col"><i class="fas fa-map-marker-alt"></i> <?=$local?></div>
          </div>
         <hr style="height: 1px;width:100%;display:block;margin: 9px 0;overflow: hidden;background-color: #BDBDBD;">
        <p class="lead"><?=$descricao?></p>
      </div>

      <div class="row">
        <div class="col py-2" style="background-color: #BDBDBD;position: fixed;right: 0;left: 0;bottom: 0;text-align: center;">
          <form method="post" action="cadastro.php?key=<?=$key?>&id=<?=$id?>">
          <button type="submit" class="btn btn-block btn-lg py-3" style="background-color: #303F9F; color: aliceblue;">Candidatar-se</button>
          </form>
        </div>        
      </div>

      <footer class="my-3 pt-3 text-muted text-center text-small">
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
  </body>
</html>
