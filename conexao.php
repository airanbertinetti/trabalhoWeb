<?php
$conexao = mysqli_connect("localhost", "root", "") or die("erro ao conectar");
$banco = mysqli_select_db($conexao, "scsac") or die(mysqli_error($conexao));
mysqli_set_charset($conexao, "utf8");


