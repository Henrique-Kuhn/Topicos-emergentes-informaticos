<?php
include ('conexao.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
   
    if(mysqli_num_rows($resultado) == 1) {
        $contato = mysqli_fetch_assoc($resultado);
    } else {
        echo "O contato não foi encontrado.";
        exit;
    }
}

if(isset($_POST['Excluir'])) {
    $id = $_POST['id'];

    $sql2 = "DELETE FROM contatos WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        echo "Contato excluído com sucesso!";
        echo "<br><a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "Erro ao excluir: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .formulario{
        width: 450px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .formulario input[type="text"]{
        width: 95%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .formulario input[type="submit"]{
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .formulario input[type="submit"]:hover{
        background-color: #45a049;
    }
</style>
<body>

    
    <form method="post" class="formulario">
    <h2>EXCLUIR CONTATO</h2>
    <p>Tem certeza de que deseja excluir o contato <strong><?php echo "<br>Nome: ".$contato['nome']."<br> Endereço: ", $contato['endereco']."<br> Telefone: ", $contato['telefone']. "<br>"; ?></strong>?</p>
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        <input type="submit" name="Excluir" value="Excluir">
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>