<?php
include './verificaLogin.php';
include './conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM disciplinas WHERE id = $id";

$deleta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($deleta) {
    header("location:listadisciplinas.php");
} else {
    $deleta;
}