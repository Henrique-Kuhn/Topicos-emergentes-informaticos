<html>
    <body>
        <?php
        $_num1 = $_POST["num1"];
        $_num2 = $_POST["num2"];
        $_operador = $_POST["ope"];

        if($_num1 && $_num2){
            switch($_operador){
                case "+":
                    $resul = ($_num1 + $_num2);
                    echo "$_num1 + $_num2 = $resul";
                    break;
                    case "-":
                    $resul = ($_num1 - $_num2);
                    echo "$_num1 - $_num2 = $resul";
                    break;
                    case "*":
                    $resul = ($_num1 * $_num2);
                    echo "$_num1 * $_num2 = $resul";
                    break;
                    case "/":
                    $resul = ($_num1 / $_num2);
                    echo "$_num1 / $_num2 = $resul";
                    break;
                   
            }
        }
        ?>
    </body>
</html>