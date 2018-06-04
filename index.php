<html>
<head>
    <title>Acesso</title>
  <?php include './bibliotecas.php';
        include './modalpopUp.php';
  ?>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">UFPR - Sistema de Cadastro e Solicitação de Aproveitamento de Conhecimento</a>
        </div>
      </div>  
    </nav>
    <div class="container login">
        <form class="form-signin">
          <h2 class="form-signin-heading"><img src="images/logoUFPRLogin.png"/></h2>
          <label for="inputUser" class="sr-only">Usuário</label>
          <input id="inputUser" class="form-control" placeholder="Usuário" required="" autofocus="" type="text" name="login">
          <label for="inputPassword" class="sr-only">Password</label>
          <input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password" name="senha">

          <button formaction="validaLogin.php" class="btn btn-lg btn-primary btn-block" formmethod="POST" type="submit">Entrar</button>

          <div class="row">
            <div class="col-md-6"><a class="btn btn-link" data-toggle="modal" data-target="#myModal">Esqueci a senha</a></div>
            <div class="col-md-6"><a class="btn btn-link pull-right " data-toggle="modal" data-target="#myModal">Não sou Registrado</a></div>
          </div>
        </form>
  </div>   
    
  