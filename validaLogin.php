<?php
include './conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "select * from login "
        . "where login = '$login' and "
        . "senha = '$senha';";

$query = mysqli_query($conexao, $sql);
$result = mysqli_num_rows($query);

session_start();
if ($result > 0) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("location:menuprincipal.php");
} else {
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');
  include './logoff.php';    
    }
    




