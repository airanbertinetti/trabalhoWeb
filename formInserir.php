<html>
    <head>
        <title>Cadastro de Usuários</title>        
    </head>

<?php 
    include './verificaLogin.php';
    include './bibliotecas.php';
    include_once './navbar.php'; 
?>

 <body>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="container">
            <br><br>
                 <div class="panel panel-default">
                   <div class="panel panel-heading">
                        <strong><h4>Cadastro de Usuários</h4></strong>
                    </div>
                <div class="panel panel-body">
                    <form action="inserir.php" method="POST">

                        <div class="form-group">
                            <label  for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="grr">Matrícula/GRR</label>
                            <input class="form-control" type="number" name="grr"  required="true"/>
                        </div>
                         <div class="form-group">
                         <div class="text-right">
                              <label class="radio-inline"><input type="radio" name="reg" value="Aluno">Aluno</label>
                              <label class="radio-inline"><input type="radio" name="reg"value="Servidor">Servidor</label>
                              <label class="radio-inline"><input type="radio" name="reg"value="Outros">Outros</label> 
                           </div>
                          <div class="form-group">                 
                        <?php include 'caixasdeselecao.php'; ?>
                        </div>
                </div>
                    <div class="panel panel-footer">
                        <div class="text-right">
                            <input class="btn btn-default" type="button" value="Voltar" onClick="history.go(-1)"> 
                             <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>
                             <a href='listausuarios.php' class="btn btn-default">Listar Usuários</a>
                            <input type="submit" value="Gravar" class="btn btn-default btn-primary"/>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </body>
</html>

