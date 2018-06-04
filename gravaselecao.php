<?php
include './verificaLogin.php';
include('conexao.php');
include'./bibliotecas.php';

$id = $_GET['id'];
$validacao = $_GET['validacao'];
$func = $_SESSION['login'];
$data = 'NOW()';

$sql = "UPDATE cliente SET validacao='$validacao', func='$func',data=$data WHERE id=$id";
$inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($inserir) {
 ?>
            <script language="JavaScript">
                bootbox.alert({size: "small", message: "<h4>Dados Gravados com Sucesso<h4>", 
                callback: function(){window.location = './analisasolicitacao.php'}})
            </script>
 <?php
           
    } else {
        echo $grava;
    }
