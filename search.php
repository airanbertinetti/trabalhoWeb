 <html>
    <head>
        <title>Pesquisa</title>   
    <?php 
         include './verificaLogin.php';
         include "./bibliotecas.php";
         include_once './navbar.php';
         include "./conexao.php";
    ?>
    </head>
    
    <body>
          <div class="container">
            <br><br>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong><h4>Resutado da Pesquisa<h4</strong>
                </div>
                <div class="panel panel-body">
                    <table class="table table-condensed table-striped">
                        <tr class="text-center">
  <?php
    $search = $_GET['search'];
    $sql = "SELECT * FROM `cliente` WHERE (cliente.nome LIKE '%$search%') OR (cliente.grr LIKE '%$search%') "
            . "OR (cliente.curso LIKE '%$search%') OR (cliente.discp1 LIKE '%$search%') OR (cliente.discp2 LIKE '%$search%')"
            . "OR (cliente.reg LIKE '%$search%') OR (cliente.validacao LIKE '%$search%') OR (cliente.func LIKE '%$search%')"
            . "OR (cliente.data LIKE '%$search%') ORDER BY nome";
    $dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
    $numRegistros = mysqli_num_rows($dados);
 
	if ($numRegistros != 0) {
            while ($cliente = mysqli_fetch_assoc($dados)) {
                   $id = $cliente['id'];	
                   $nome = $cliente['nome'];
                   echo "<tr>
                             <td>$nome</td>
                               <td>
                                 <a href='deletar.php?id=$id' class='btn btn-default'>Deletar</a> 
                                 <a href='formAlterar.php?id=$id' class='btn btn-primary'>Editar</a>
                                </td>
                        </tr>";                         
		}
	} else {
		echo "<h3>Ops!</h3><h4>Nenhuma Informação Encontrada</h4>";

	}
?>
                    </table>
                </div>
                            </div>
                <div class="panel panel-footer">
                        <div class="text-right">
                           <input class="btn btn-default" type="button" value="Voltar" onClick="history.go(-1)">
                           <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>                            <a href='formInserir.php' class="btn btn-info">Inserir novo Usuário</a>
                        </div>
                   </div>
              </div>
      </body>
</html>
                           
                            