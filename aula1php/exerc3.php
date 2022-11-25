<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Reajuste</title>
</head>
<body>
    <form action="exerc3.php">
        Digite um saldo para reajuste: <br/>
        <input type="text" name="saldo">
        <input type="submit">
    </form>  
    <?php
        $valor1 = $_GET["saldo"];
        $valor2 = $_GET["saldo"];
        $reajust = $_GET["saldo"] / 100;
        $valor1 = $valor1 + $reajust;
        $valor2 = $valor2 - $reajust;
        echo"<br/>Saldo: ",$_GET["saldo"];
        echo"<br/>Reajuste positivo: ",$valor1;
        echo"<br/>Reajuste negativo: ",$valor2; 
    ?>
</body>
</html>