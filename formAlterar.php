<html>
    <head>
        <title>Editar Registros</title>
         <?php include './bibliotecas.php'; ?>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<?php
include './verificaLogin.php';
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id = $id";
$dados = mysqli_query($conexao, $sql) or die(mysql_error($conexao));
$cliente = mysqli_fetch_assoc($dados);
?>
 <body>
        <?php include_once './navbar.php'; ?>
        <div class="container">
            <br>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong><h4>Alterando Usuário: <?php echo $cliente['nome'];?> </h4></strong>
                </div>
                <div class="panel panel-body">
                    <form action="gravar.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>"/>
                        
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input class="form-control" type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="grr">Matrícula/GRR</label>
                            <input class="form-control" type="number" name="grr" value="<?php echo $cliente['grr']; ?>" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="curso">Curso</label>
                            <input class="form-control" type="text" name="curso" disabled="disabled" value="<?php echo $cliente['curso']; ?>"/>
                        </div>           
                        <div class="form-group">
                            <label for="discp1">Disciplina 1</label>
                            <input class="form-control" type="text" name="discp1" disabled="disabled"value="<?php echo $cliente['discp1']; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="discp2">Disciplina 2</label>
                            <input class="form-control" type="text" name="discp2" disabled="disabled"value="<?php echo $cliente['discp2']; ?>"/> 
                        </div>
          
 <?php
    
    if ($cliente['reg'] == "Aluno"){
        $aluno = 'checked';
        $servidor = NULL;
        $outros = NULL;                
    } elseif ($cliente['reg'] == "Servidor"){ 
        $aluno = NULL;
        $servidor = 'checked';
        $outros = NULL;
    } else if($cliente['reg'] == "Outros"){
        $outros = 'checked';
        $aluno = NULL;
        $servidor = NULL;
    }
 ?>
                        <div class="text-right">
                              <label class="radio-inline"><input type="radio" name="reg" value="Aluno"<?php echo $aluno ?>>Aluno</label>
                              <label class="radio-inline"><input type="radio" name="reg"value="Servidor"<?php echo $servidor ?>>Servidor</label>
                              <label class="radio-inline"><input type="radio" name="reg"value="Outros"<?php echo $outros ?>>Outros</label> 
                           </div>
                      <?php include 'caixasdeselecao.php'; ?>
   
                    <div class="panel panel-footer">
                        <div class="text-right">
                            <input class="btn btn-default" type="button" value="Voltar" onClick="history.go(-1)"> 
                            <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>
                            <input type="submit" value="Gravar" class="btn btn-info"/>
                        </div>
                     </form> 	
                </div>
            </div>
        </div>
    </body>
</html>