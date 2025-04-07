<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETORES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">VETORES</h1>
   
    <form action="index3.php" method="post">
    Digite o nome dos convidados:
    <input type="text" name ="convidado"><br><br>
    Digite o numero de convidados:
    <input type="number" name="nconvidados" >
    <br><br>
    <input type="submit" name="btn" value="ADICIONAR">

    </form>
</body>
<?php

if(isset($_POST["btn"])){
  
  $convidados = array($_POST["convidado"]);
//   array_push($convidados);
  foreach($convidados as $c ){
    array_push($convidados, $c);
        echo "<br>$c<br>";

   
}
}
?>
</html>