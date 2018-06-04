<html>
    <head>
        <title>Lista de Usuários</title>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<?php
    include 'verificaLogin.php';
    include "conexao.php";
    include "./bibliotecas.php"; 
    include_once './navbar.php'; 
        

if (isset($_GET['pagina'])) { 
    $pagina = $_GET['pagina'];
} else { 
    $pagina = 0;
}
$sql = "select * from cliente order by nome";
$dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
      
$total_reg = "5"; 

if (!$pagina) {
$pc = "1";
} else {
$pc = $pagina;
}

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysqli_query($conexao, "SELECT * FROM cliente order by nome LIMIT $inicio, $total_reg ");
$todos = mysqli_query($conexao, $sql);
 
$tr = mysqli_num_rows($todos); 
$tp = $tr / $total_reg; 
?>

  <body>
        <div class="container-fluid">
            <br><br>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong><h4>Lista de Usuários<h4</strong>
                </div>
                <div class="panel panel-body">
                    <table class="table table-condensed table-striped ">
                        <tr class="text-center">
                            <th>Matrícula/GRR</th>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Curso</th>
                            <th>Disciplina 1</th>
                            <th>Disciplina 2</th>
                       </tr>  
                 <?php
                 while ($cliente = mysqli_fetch_assoc($limite)) {
                            $id = $cliente['id'];
                            $nome = $cliente['nome'];
                            $grr = $cliente['grr'];
                            $reg = $cliente['reg'];
                            $curso = $cliente['curso'];
                            $discp1 = $cliente['discp1'];
                            $discp2 = $cliente['discp2'];
                           
                            echo "<tr>
                                 <td>$grr</td>
                                 <td>$nome</td>
                                 <td>$reg</td>
                                 <td>$curso</td>
                                 <td>$discp1</td>
                                 <td>$discp2</td>    
                             <td>
                                <div class='form-group'>
                                    <a href='deletar.php?id=$id' class='btn btn-default'>Deletar</a> 
                                    <a href='formAlterar.php?id=$id' class='btn btn-primary'>Editar</a>
                             </td>
                                </div> 
                                    </tr>";
                 }         
$anterior = $pc -1;
$proximo = $pc +1;
?>
                    </table>
                </div>
                <div class="panel panel-footer"> 
                    <div class="form-group">
                        <form class="navbar-form navbar-left" action="./search.php" method="GET">
                            <input type="text" class="form-control" placeholder="Buscar" name="search">                       
                            <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>Pesquisar</button>
                        </form>
                           <div class="text-right">
                               
<?php
    if ($tr > $total_reg){
        echo " <a class='btn btn-default' href='?pagina=$anterior'>Página anterior</a>";
        echo " <a class='btn btn-default' href='?pagina=$proximo'>Próxima Página</a>";
    }
 ?> 
                             <input class='btn btn-default' type='button' value='Voltar' onClick='history.go(-1)'> 
                             <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>
                             <a href='formInserir.php' class="btn btn-info">Inserir Usuário</a>
                        </div>
                     </div>
                 </div>
              </div>
          </div>
    </body>
</html>
                   
                                               