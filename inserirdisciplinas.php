<?php
include './verificaLogin.php';
include('conexao.php');
include'./bibliotecas.php';

$disciplina = $_POST['nomedisciplina'];
$sql = "INSERT INTO disciplinas(id, nomedisciplina) VALUES 
		(null,'$disciplina')";

$inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($inserir) {
 ?>
            <script language="JavaScript">
            bootbox.alert({size: "large", message: "<h4>Dados Gravados com Sucesso<h4>", 
                callback: function(){window.location = './formInserirDisciplina.php'}})
</script>
 <?php
    } else {
        echo $grava;
    }
