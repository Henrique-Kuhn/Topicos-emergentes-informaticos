<html>

<body>
    <h2>Cadastrar Contato</h2>

    <form method="post" action="salva.php">

        Nome: <input type="text" name="nome" required><br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        <input type="submit" value="Salvar">
    </form>

    <h2>Lista de Contatos</h2>
    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
                " | <a href='editar.php?id=" . $linha["id"] . "'>Editar</a>" .
                " | <a href='excluir.php?id=" . $linha["id"] . "'>Excluir</a> <br>";
        }
    } else {
        echo "Nenhum contato encontrado.";
    }
    ?>
</body>

</html>