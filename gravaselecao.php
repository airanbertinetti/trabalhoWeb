<?php
include './verificaLogin.php';
include('conexao.php');
include'./bibliotecas.php';

$id = $_POST['id'];
$validacao = $_POST['validacao'];
$func = $_SESSION['login'];
$data = 'NOW()';

if ($validacao == 'Reverter'){
     $motivo = NULL;
     $validacao = 'Aceito';
}
    else if ($validacao == 'Aceitar'){
        $validacao = 'Aceito';
        $motivo = NULL;
}
    else if($validacao == 'Negar'or $validacao == 'Confirmar Recusa'){
          $validacao = 'Negado';
          $motivo = $_POST['motivo'];
    }

$sql = "UPDATE cliente SET validacao='$validacao', func='$func', data=$data, motivo='$motivo' WHERE id=$id";
$inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($inserir) {
 ?>
            <script language="JavaScript">
                bootbox.alert({size: "small", message: "<h4>Dados Gravados com Sucesso<h4>", 
                callback: function(){window.location = './listasolicitacao.php'}})
            </script>
 <?php
           
    } else {
        echo $grava;
    }
