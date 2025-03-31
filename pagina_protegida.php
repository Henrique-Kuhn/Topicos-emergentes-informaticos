<html>
    <body>
        <?php
        $_usuarioc = "Henrique-Online";
        $_senhac = "123456"; 
        $_usuario = $_POST["usu"];
        $_senha = $_POST["sen"];

        if ($_usuarioc == $_usuario && $_senhac == $_senha){
            echo "Seja bem-vindo\n <br>" ;
            
            echo "Você está online no servidor da empresa\n<br>";

            echo "Seu cargo é: Gerente do departamento de analise de dados\n<br>";
        }else{
            echo "Usuario ou senha incorreto, Tente novamente\n<br>";

        }
        ?>
        <form action="teste2.php" >
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>