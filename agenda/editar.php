<?php

$id = $_GET['id'];
$sql = "SELECT * FROM contatos WHERE id = $id";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     Nome: <input type="text" id="nome" placeholder="Digite seu nome" class="input" name="nome" >
     <br><br>
     Telefone: <input type="text" id="tel" placeholder="Digite seu telefone" class="input" name="tel" >
     <br><br>
     Endereço: <input type="text" id="endereco" placeholder ="Digite seu endereço" class="input" name="endereco">
     <br><br> 
     <input type="submit" value="Cadastrar" class="btn"><br><br>
        <a href='index.php'>Voltar</a><br>
        
</body>
</html>