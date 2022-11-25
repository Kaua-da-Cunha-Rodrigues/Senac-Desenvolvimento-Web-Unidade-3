<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada com if</h1>
    <form action="explica2.php">
        Digite o primeiro número: <br>
        <input type="number" name="n1">  <br>
        Digite o segundo número: <br>
        <input type="number" name="n2">  <br>
        Escolha a operação: + - / *<br>
        <input type="text" name="calculo"> <br>
        <input type="submit" value="Calcular">
    </form>  
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $operacao = $_GET["calculo"];
        if ($operacao == "+"){
            $n3 = $n1 + $n2;
            echo"O primeiro número é: ", $n1, "<br>O segundo número é: ", $n2;
            echo"<br>A soma dos números é: ", $n3;
        }else if ($operacao == "-"){
            $n3 = $n1 - $n2;
            echo"O primeiro número é: ", $n1, "<br>O segundo número é: ", $n2;
            echo"<br>A subtração dos números é: ", $n3;    
        }else if ($operacao == "/"){
            $n3 = $n1 / $n2;
            echo"O primeiro número é: ", $n1, "<br>O segundo número é: ", $n2;
            echo"<br>A divisão dos números é: ", $n3;
        }else if ($operacao == "*"){
            $n3 = $n1 * $n2;
            echo"O primeiro número é: ", $n1, "<br>O segundo número é: ", $n2;
            echo"<br>A multiplicação dos números é: ", $n3;
        }
    ?>
</body>
</html>