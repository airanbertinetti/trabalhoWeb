<html>
    <head>
        <title>Lista de Disciplinas</title>   
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
$sql = "select * from disciplinas order by nomedisciplina";
$dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
      
$total_reg = "8"; 

if (!$pagina) {
$pc = "1";
} else {
$pc = $pagina;
}

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$sqlp = "SELECT * FROM disciplinas order by nomedisciplina LIMIT $inicio, $total_reg";
$limite = mysqli_query($conexao, $sqlp);
 
$tr = mysqli_num_rows($dados); 
$tp = $tr / $total_reg; 
?>
 <body>
         <div class="container">
            <br><br>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong><h4>Lista de Disciplinas<h4</strong>
                </div>
                <div class="panel panel-body">
                    <table class="table table-condensed table-striped">
                        <tr class="text-center"></tr>           
        <?php
                     while ($disciplinas = mysqli_fetch_assoc($limite)){  
                            $id = $disciplinas['id'];
                            $nome = $disciplinas['nomedisciplina'];
                           echo "<tr>
                                     <td>$nome</td>
                                     <td><a href='./deletardisciplina.php?id=$id' class='btn btn-default'>Deletar</a></td> 
                                </tr>";
                        }
$anterior = $pc -1;
$proximo = $pc +1;
?>                    
             </table>
                  </div>
                <div class="panel panel-footer"> 
                    <div class="form-group">
                        <div class="text-right">
<?php
    if ($tr > $total_reg){
        echo " <a class='btn btn-default' href='?pagina=$anterior'>Página anterior</a>";
        echo " <a class='btn btn-default' href='?pagina=$proximo'>Próxima Página</a>";
    }
?>  
                           <input class="btn btn-default" type="button" value="Voltar" onClick="history.go(-1)"> 
                              <a href='menuprincipal.php' class="btn btn-default">Menu Principal</a>
                              <a href='formInserirDisciplina.php' class="btn btn-info">Inserir Disciplina</a>
                     </div> 
                 </div>
             </div>                
          </div>
      </div>
   </body>
</html>

