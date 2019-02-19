<?php
$id = $_GET['id'];
$key = $_GET['key'];
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="css/cadastro.css">
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
          
      <form class="form-signin" action="fblogin.php?key=<?=$key?>&id=<?=$id?>" method="post">
          <div class="text-center">
      <img class="mb-4" src="img/Logo.png" alt="" width="72" height="72">
          </div>
      <h1 class="h3 mb-3 font-weight-normal">Cadastrar Curriculum</h1>
      <label for="nomecompleto" class="sr-only">Nome Completo</label>
      <input name="nomecompleto" type="text" id="nomecompleto" class="form-control" placeholder="Nome Completo" required="" autofocus="">
          
      <label for="cpf" class="sr-only">CPF</label>
      <input type="number" name="cpf" id="cpf" class="form-control" placeholder="Numero de CPF" required="" autofocus="">
    
      <label for="nascimento" class="sr-only">CPF</label>
      <input type="text" id="nascimento" name="nascimento" class="form-control" placeholder="Data de Nascimento" required="" autofocus="">   
          
      <label for="telefone" class="sr-only">Numero de Contato</label>
      <input type="number" id="telefone" name="telefone" class="form-control" placeholder="Numero de Contato" required="" autofocus="">          
          
      <label for="email" class="sr-only">Endereço de Email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de Email" required="" autofocus="">         
          
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required="">
          
      <label for="cv" class="sr-only">CPF</label>
          <textarea class="form-control" name="cv" id="cv" required="">Pequena Descrição do Seu Curriculum.</textarea>    
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Concordo com os termos e licensa.
        </label>
      </div>
          <button type="submit" class="btn-block" style="background: #3c4c84;border-radius: 8px;color: #fff;display: block;font-size: 1.6em;font-weight: 600;line-height: 50px;margin-bottom: 20px;padding-left: 26px;text-align: center;"id="cadastroFB" title="Cadastrar com Facebook"><i style="display: inline-block;width: 13px;height: 29px;background: url(img/sprite.png) -255px 0;float: left;margin-right: 14px;margin-top: 13px;"class="sprite-facebook-button"></i> Cadastrar com Facebook</button>
      <!--</11><button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>    -->  
    </form>

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
