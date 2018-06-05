<html>
    <head>
        <title>Lista Motivos</title>
      </head>
<?php
include './verificaLogin.php';
include 'conexao.php';
include './bibliotecas.php';
include_once './navbar.php';

$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id = $id";

$dados = mysqli_query($conexao, $sql) or die(mysql_error($conexao));
$cliente = mysqli_fetch_assoc($dados);
?>

 <body>
         <div class="container">
             <br><br>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong><h4>Motivo da negação do pedido de:  <?php echo $cliente['nome'];?> </h4></strong>
                </div>
                <div class="panel panel-body">
                    <form action="gravaselecao.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>"/>
                        
                            <input class="form-control" type="text" name="curso"  disabled="disabled" value="<?php echo $cliente['motivo']; ?>"/>
                        
                                                      
                    <div class="panel panel-footer">
                        <div class="text-right">
                            <input class="btn btn-default" type="button" value="Voltar" onClick="history.go(-1)"> 
                            <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>
                            <input type="submit" name ="validacao" value="Reverter" class="btn btn-success"/>
                        </div>
                     </form> 	
                </div>
            </div>
        </div>
    </body>
</html>