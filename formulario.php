<html>
    <body>
        <?php
        $_txtnome=$_POST["txtnome"];
        $_idade=$_POST["idade"];
        $_sexo= $_POST["sexo"];
        $_endereco = $_POST["endereco"];
       

        if ($_idade >= 18) {
            echo "Seu nome: $_txtnome, $_sexo, $_endereco";
            echo "Você é maior de idade";
        }else{
            echo "Seu nome: $_txtnome, $_sexo, $_endereco";
            
            echo "Você é menor de idade";
        }
        
        ?>
      <br><br><form action="teste.php" method="post"> 
        <input type="submit" value="voltar">
      </form>
    </body>
</html>