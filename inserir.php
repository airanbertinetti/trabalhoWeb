<?php
include './verificaLogin.php';
include('conexao.php');
include'./bibliotecas.php';

$nome = $_POST['nome'];
$grr = $_POST['grr'];
$reg = $_POST['reg'];
$curso = $_POST['curso'];
$discp1 = $_POST['discp1'];
$discp2 = $_POST['discp2'];


$sql = "INSERT INTO cliente(id, nome, grr, reg, curso, discp1, discp2) VALUES 
		(null,'$nome',$grr,'$reg','$curso','$discp1', '$discp2')";
$inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($inserir) {
    ?>
            <script language="JavaScript">
            bootbox.alert({size: "small", message: "<h4>Dados Gravados com Sucesso<h4>", 
                callback: function(){window.location = './formInserir.php'}})
            </script>
 <?php
} else {
    echo $grava;
}