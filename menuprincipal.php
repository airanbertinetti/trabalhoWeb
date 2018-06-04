    <head>
        <title>Menu Principal</title>        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </head>
<?php include './verificaLogin.php';
    include_once './navbar.php'
?>
    <body>
         <div class="container">
            <br><br>
            <div class="panel panel-default">
                   <div class="panel panel-heading">
                       <strong><h3>Olá! .. <?php echo $_SESSION['login']; ?></h4></strong><h4>Escolha uma ação no menu abaixo.</h4></strong>
                    </div>
                <div class="btn-group"> 
                    <form class="navbar-form navbar-left" action="./search.php" method="GET">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Buscar Usuário" name="search">
                        </div>
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>  Pesquisar</button>
                    </form>
                   </div>
                <div class="panel panel-body">
                            
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">Cadastrar
                        <span class="caret"></span></button>
                   <ul class="dropdown-menu">
                      <li><a href='./formInserir.php'>Cadastrar Usuários</a></li>
                      <li><a href='formInserirCurso.php'>Cadastrar Cursos</a></li>
                      <li><a href='formInserirDisciplina.php'>Cadastrar Disciplinas</a></li>
                  </ul> 
                </div>                
                     
                <div class="btn-group">
                    <button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">Listar 
                        <span class="caret"></span></button>
                   <ul class="dropdown-menu">
                      <li><a href="./listausuarios.php">Usuários</a></li>
                      <li><a href="./listacursos.php">Cursos</a></li>
                      <li><a href="./listadisciplinas.php">Disciplinas</a></li>
                      <li><a href="./listasolicitacao.php">Solicitações</a></li>
                  </ul>
                </div>
                    <div class="btn-group">
                        <div class="text-right">
                            <a href='analisasolicitacao.php' class="btn btn-default">Analisar Solicitações</a>
                      </div>   
                </div>
              </div>                
            </div>
               <div class="panel panel-footer">
                 <div class="text-right">
                     <a href='logoff.php' class="btn btn-default">Cancelar</a>
                             </div>
                 </div>
            </div>
        </div>
     </body>
</html>

