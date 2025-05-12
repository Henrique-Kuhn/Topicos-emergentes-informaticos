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
<html>
<body>
    <h2>Excluindo Contato</h2>
    <p>Tem certeza de que deseja excluir o contato <strong><?php echo "<br>Nome: ".$contato['nome']."<br> Endereço: ", $contato['endereco']."<br> Telefone: ", $contato['telefone']. "<br>"; ?></strong>?</p>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        <input type="submit" name="Excluir" value="Excluir">
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
