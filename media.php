<html>
    <body>
        <?php
        $_n1= $_POST["nota1"];
        $_n2=$_POST["nota2"];
        $mediasem = ($_n1 * 0.4 )+($_n2*0.6);
        echo "Sua média final foi: $mediasem <br>";
         if ($mediasem <= 1.7){
            echo "Você foi reprovado e não passará nem se fizer o exame!";
         }elseif($mediasem >=1.7 && $mediasem < 7.0){
            echo "Você pegou recuperação, terá direito a fazer o exame! <br>";
            $mediaexame = (50 - (6*$mediasem))/4;
            echo "A nota que você precisa tirar é: $mediaexame";

         }else{
            echo "Você foi aprovado, parabéns!";
         }
        ?>
    </body>
</html>