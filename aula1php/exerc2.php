<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
</head>
<body>
    <form action="ex4.php" method="get"> <!--Em coisas mais simples o method não é tão necessário, para coisas mais complexas sim -->
        Ano atual: <br/>
        <input type="text" name="ano1"> <br/>
        Ano de Nascimento: <br/>
        <input type="text" name="ano2"> <br/>
        <br/><input type="submit">
    </form>    
</body>
</html>
<?php
    $ano1 = $_GET["ano1"];
    $ano2 = $_GET["ano2"];
    $idade = $ano1 - $ano2;
    echo"<br/>Idade: ",$idade;
?>
