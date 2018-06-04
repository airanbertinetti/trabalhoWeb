<?php
include './verificaLogin.php';
include './conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM cursos WHERE id = $id";

$deleta = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($deleta) {
    header("location:listacursos.php");
} else {
    $deleta;
}