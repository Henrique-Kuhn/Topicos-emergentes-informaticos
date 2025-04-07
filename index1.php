<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETORES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class ="titulo">VETORES</h1>
</body>
<?php


$v1 = range(0, 12);
foreach($v1 as $vet1){
    echo "$vet1<br>";
}
echo "lista 1<br>";


$v2 = range(0,100,10);
foreach($v2 as $vet2){
    echo "$vet2<br>";
    
}
echo "lista 2<br>";


$v3 = range("a","i");
foreach($v3 as $vet3){
    echo "$vet3<br>";
}
echo "lista 3<br>";

$v4 = range("e","a");
foreach($v4 as $vet4){
    echo "$vet4<br>";
}
echo "lista 4<br>";
?>
</html>