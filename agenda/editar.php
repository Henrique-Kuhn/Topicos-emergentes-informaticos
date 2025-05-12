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
<html>
<body>
    <h2>Editando Contatos</h2>
    <form method="post">
        Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>" required><br><br>
        Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone']; ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        <input type="submit" name="Atualizar" value="Atualizar">
</form>

</html>
    