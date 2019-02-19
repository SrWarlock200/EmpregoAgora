
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
    <link href="css/floating.css" rel="stylesheet">
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
<form class="form-signin" action="logar.php" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="img/Logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Emprego Agora</h1>
        <?php
        if(isset($_GET['error'])) {
          echo '<div class="alert alert-danger">Email invalido!</div>';
        };
        ?>
        <p>Visualize e agende suas entrevista através de nosso app.</p>
      </div>

      <div class="form-label-group">
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <label for="inputPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Manter-se conectado
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #3F51B5;">Entrar</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
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
