<?php
include('index.php');
$_nome = $_POST ["nome"];
$_telefone = $_POST["tel"];
$_endereco= $_POST["endereco"];
$sql = "INSERT INTO contatos (nome, endereco,telefone)values('$_nome','$_telefone','$_endereco')";

mysqli_query($conexao,$sql);
if(mysqli_query($conexao,$sql)){
    echo "tudo certo pae";

}else{
    echo "deu bosta gay". mysqli_error();
} 
?>