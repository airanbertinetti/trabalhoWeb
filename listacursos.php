<html>
    <head>
        <title>Lista de Cursos</title>   
    </head>
    
<?php
include 'verificaLogin.php';
include "conexao.php";
include "./bibliotecas.php"; 

if (isset($_GET['pagina'])) { 
    $pagina = $_GET['pagina'];
} else { 
    $pagina = 0;
}
$sql = "select * from cursos order by nomedocurso";
$dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
      
$total_reg = "9"; 

if (!$pagina) {
$pc = "1";
} else {
$pc = $pagina;
}

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$sqlp = "SELECT * FROM cursos order by nomedocurso LIMIT $inicio, $total_reg";
$limite = mysqli_query($conexao, $sqlp);
 
$tr = mysqli_num_rows($dados); 
$tp = $tr / $total_reg; 
?>
  <body>
        <?php include_once './navbar.php'; ?>
       
        <div class="container">
            <br><br>
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong><h4>Lista de Cursos<h4</strong>
                </div>
            <div class="panel panel-body">
                    <table class="table table-condensed table-striped">
    <?php
                     while ($cs = mysqli_fetch_array($limite)) {
                        $cursos = mysqli_fetch_assoc($dados);
                            $id = $cursos['id'];
                            $nome = $cursos['nomedocurso'];
                                                      
                            echo "<tr>
                                    <td>$nome</td>
                                    <td>
                                      <a href='./deletarcurso.php?id=$id' class='btn btn-default'>Deletar</a> 
                                    </td>
                                  </tr>";
                    }
$anterior = $pc -1;
$proximo = $pc +1;

    ?>
                    <table
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
                              <a href='formInserirCurso.php' class="btn btn-info">Inserir Curso</a>
                     </div> 
                 </div>
             </div>                
          </div>
      </div>
  </div>
</html>
