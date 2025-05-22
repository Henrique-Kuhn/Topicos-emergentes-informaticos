<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav>
    <H1>AGENDA DE CONTATOS</H1>
</nav>
<style>
    nav{
        background-color:rgb(226, 226, 226);
        color: black;
        text-align: center;
        padding: 10px;
        width: 80%;
        margin: 0 auto;
        border: 0.3px solid #ccc;
       margin-bottom: 50px;
        border-radius: 15px;
    }
.formulario {
    width: 450px;
    margin-left: 200px;
    display: flex;
    flex-direction: column;
    height: 400px;
    padding: 20px;
    /* border: 0.3px solid #ccc; */
    box-shadow: 3px 3px 3px 3px #ccc;
    border-radius: 5px;

}
.contatos{
    width: 550px;
    margin-left: 1000px;
    margin-top: -435px;
    display: flex;
    flex-direction: column;
    height: 400px;
    padding: 20px;
    /* border: 0.3px solid #ccc; */
    box-shadow: 3px 3px 3px 3px #ccc;
    border-radius: 5px;
}
.contatos h2{
    text-align: center;
}
.formulario input[type="text"] {
    width: 95%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 4px;
}
.formulario input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
a{
    text-decoration: none;
    color: black;
    cursor: pointer;
    border: 0.3px solid #ccc;
    padding: 5px;
    border-radius: 5px;
    width: 50px;
    margin-top: 5px;    
    margin-bottom: 5px;
}
a:hover{
    background-color: #ccc;
    transition: 0.3s;
}
</style>
<body>


<form method="post" action="salva.php" class="formulario">
    <h2>Cadastrar Contato</h2>
    Nome: <input type="text" name="nome" required><br><br>
    Endereço: <input type="text" name="endereco"><br><br>
    Telefone: <input type="text" name="telefone" id="telefone"><br><br>
    <input type="submit" value="Salvar">
</form>
<div class ="contatos">
<h2>Lista de Contatos</h2>
<?php
include('conexao.php');

$sql = "SELECT * FROM contatos";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
            " | <a href='editar.php?id=" . $linha["id"] .  "'>Editar</a>" .
            "  <a href='excluir.php?id=" . $linha["id"] . " '>Excluir</a> <br>";
    }
} else {
    echo "Nenhum contato encontrado.";
}
?>
</div>
<script>
    const inputTelefone = document.getElementById('telefone');
    inputTelefone.addEventListener('input', formatarTelefone);

    function formatarTelefone(e) {
        let valor = e.target.value;
        valor = valor.replace(/\D/g, ''); 
        valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
        valor = valor.replace(/(\d)(\d{4})$/, '$1-$2'); 
        e.target.value = valor; 
    }
</script>
</body>
</html>