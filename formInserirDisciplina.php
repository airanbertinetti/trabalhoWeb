<html>
    <head>
        <title>Cadastro de Disciplinas</title>        
       <?php include './bibliotecas.php';  ?>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<?php 
include './verificaLogin.php';
?>
 <body>
        <?php include_once './navbar.php'; ?>
        <div class="container">
            <br><br>
            <div class="panel panel-default">
                   <div class="panel panel-heading">
                        <strong><h4>Cadastro de Disciplinas</h4></strong>
                    </div>
                <div class="panel panel-body">
                    <form action="inserirdisciplinas.php" method="POST">
                        <div class="form-group">
                            <label  for="nomedisciplina">Disciplina</label>
                            <input class="form-control" type="text" name="nomedisciplina" required="true"/>
                        </div>
                </div>
                    <div class="panel panel-footer">
                        <div class="text-right">
                            <input class="btn btn-default" type="button" value="Voltar" onClick="history.go(-1)"> 
                             <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>
                             <a href='listadisciplinas.php' class="btn btn-default">Listar Disciplinas</a>
                            <input type="submit" value="Gravar" class="btn btn-default btn-primary"/>
                        </div>
                    </div>
              </div>
         </div>
    </body>
</html>

