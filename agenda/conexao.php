<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "agenda";


$conexao = mysqli_connect($servidor, $user, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>