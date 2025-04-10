<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
</head>
<body>
    <h1>Lista de Convidados</h1>

    
    <form method="post" action="">
        <label for="nome">Nome do Convidado:</label>
        <input type="text" id="nome" name="nome" > 
        <button type="submit">Adicionar</button>
        <button type="submit" name="remove" value="remover">Remover</button>
        <button type="submit" name="resetar" value="1">Resetar</button>
    </form>

    <?php
    
    session_start();

   
    if (!isset($_SESSION['convidados'])) {
        $_SESSION['convidados'] = [];
    }

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
        $nome = ($_POST['nome']); 
        if (!empty($nome)) {
            $_SESSION['convidados'][] = $nome;
            echo "<p><strong>$nome</strong> foi adicionado à lista!</p>";
        }
        if ($nome == "1") {
            echo "";
          
        }
    }

    if (isset($_POST['resetar']) && $_POST['resetar'] == 1) {
        $_SESSION['convidados'] = []; // Limpa a lista de convidados
        
    }
    if (isset($_POST['remove']) && $_POST['remove'] == "remover") {
        if (!empty($_SESSION['convidados'])) {
            array_pop($_SESSION['convidados']); // Remove o último convidado
            echo "<p>O último convidado foi removido da lista.</p>";
        } else {
            echo "<p>A lista de convidados já está vazia.</p>";
        }
    }

    if (!empty($_SESSION['convidados'])) {
        echo "<h2>Convidados:</h2>";
        echo "<ul>";
        foreach ($_SESSION['convidados'] as $convidado) {
            echo "<li>" . ($convidado) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>A lista de convidados está vazia.</p>";
    }
   

    ?>

</body>
</html>