<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        gap:1em;
    }
</style>
<body>

    <form method="post" action="formulario.php">
        Digite o seu nome:
        <input type="text " size="80" name= "txtnome"><br><br>
        Digite sua idade:
        <input type="number" size="80" name="idade"><br><br>
        Diga seu gênero:
        <input type="radio" name ="sexo" size ="80" value="Masculino">Masculino 
        <input type="radio" name ="sexo" size ="80" value="Feminino">Feminino<br><br>
        Digite seu endereço:
        <input type="text" size="80" name="endereco"><br><br>



        <input type="submit" value = "Enviar">
       


    </form>
</body>
</html>