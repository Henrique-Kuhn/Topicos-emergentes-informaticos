<html>
    <body>
        <?php
        $_numero = $_POST["n"];
        for ($i = 0 ; $i <= 10 ; $i++){
            $tabuada = $_numero * $i;
            echo "$_numero X $i = $tabuada <br>";
        } 
        
        
        ?>
    </body>
</html>