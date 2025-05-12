<?php
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone) VALUES ('$nome', '$endereco',
'$telefone')";

if (mysqli_query($conexao, $sql)) {
    echo "Contato salvo com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao salvar: " . mysqli_error($conexao);
}