<?php
include './verificaLogin.php';
include('./conexao.php');
include'./bibliotecas.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$grr = $_POST['grr'];
$reg = $_POST['reg'];
$curso = $_POST['curso'];
$discp1 = $_POST['discp1'];
$discp2 = $_POST['discp2'];

$sql = "UPDATE cliente SET nome='$nome',grr=$grr,reg='$reg',curso='$curso',discp1='$discp1',discp2='$discp2' WHERE id=$id";
$gravar = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 
if ($gravar) {
  ?>
            <script language="JavaScript">
                bootbox.alert({size: "small",message: "<h4>Dados Gravados com Sucesso<h4>", 
                callback: function(){window.location = './menuprincipal.php'}})
            </script>
  <?php
}else{
    echo $gravar;		
}
