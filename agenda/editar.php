<?php
include ('conexao.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
   
   if(mysqli_num_rows($resultado)==1){
    $contato = mysqli_fetch_assoc($resultado);
   
   }
 else {
    echo "O contato não foi encontrado.";
    exit;
}
}
if(isset($_POST['Atualizar'])){

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql2 = "UPDATE contatos SET nome='$nome', endereco='$endereco', telefone='$telefone' WHERE id=$id";

    if (mysqli_query($conexao, $sql2)) {
        echo "Contato atualizado com sucesso!";
        echo "<br><a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
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
        margin-bottom: 10px;
    }
    h2{
        text-align: center;
    }
</style>
<body>
   
    
    <form method="post" class="formulario">
        <h2>Editar Contato</h2>
       
        Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>" required><br><br>
        Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>
        Telefone: <input type="text" name="telefone" id="telefone"value="<?php echo $contato['telefone']; ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        <input type="submit" name="Atualizar" value="Atualizar">
        <a href="index.php">Cancelar</a>
    </form>
</body>
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
</html>
    