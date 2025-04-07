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
   
    
</body>
<?php
echo "lista 1<br><br>";
$v1 = array('Ferrari', 'McLaren', 'RedBull', 'BMW', 'BAR');
foreach($v1 as $c => $v){
    echo "chave: $c,<br>\n valor: $v\n<br>";
}
echo "<br><br>lista 2<br><br>";


$v2 = array('a'=>8, 'b'=>9, 'd'=>6, 'c'=>2, 'e'=>5);

foreach ($v2 as $c2 => $v2){
    echo "chave: $c2,<br>\n valor: $v2\n<br>";
}
echo"<br<br> lista 3<br><br>";

$v3 = array('rg' => '00.000.00- -X', 'cpf' => '000.000.00000', 'cartao de credito' => 12345);
foreach ($v3 as $c3 => $v3){
    echo "chave: $c3,<br>\n valor: $v3\n<br>";
}
echo "<br><br> lista 4<br><br>";
$chamada = array( 'aluno1' => 'alberto', 'aluno3'=> 'bianca', 'aluno5' => 'carlos', 'aluno24' => 'maria');
foreach($chamada as $c4 => $v4){
    echo "chave: $c4,<br>\n valor: $v4\n<br>";
}



?>
</html>