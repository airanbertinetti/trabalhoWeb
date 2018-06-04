<?php
include './verificaLogin.php';
include 'conexao.php';
include'./bibliotecas.php';

$curso = $_POST['nomedocurso'];
$sql = "INSERT INTO cursos(id, nomedocurso) VALUES 
		(null,'$curso')";

$inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    if ($inserir) {
 ?>
            <script language="JavaScript">
            bootbox.alert({size: "large", message: "<h4>Dados Gravados com Sucesso<h4>", 
                callback: function(){window.location = './formInserirCurso.php'}})
            </script>
 <?php
    } else {
        echo $grava;
    }
