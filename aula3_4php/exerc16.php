<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par e Múltiplo</title>
</head>
<body>
    <!--
        Faca um Programa que peca um numero inteiro e determine se ele e par
        ou impar. Dica: utilize o operador modulo (resto da divisao): %. Depois peca
        um numero e um multiplo, e responda se o numero digitado e multiplo do
        segundo valor digitado.  
    -->
    <form action="exerc16.php">
        Digite um valor para verificação de par ou impar: <br>
        <input type="number" name="n1"> <br>
        Digite um valor : <br>
        <input type="number" name="n2"> <br>
        Digite um para verificação de múltiplo do valor anterior: <br>
        <input type="number" name="n3"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        if($n1 % 2 == 0){
            echo"<br>O número ",$n1," é par";
        }else{
            echo"<br>O número ",$n1," é impar";    
        }
        if($n3 % $n2 == 0){
            echo"<br>O número ",$n3," é múltiplo de ",$n2;
        }else{
            echo"<br>O número ",$n3," não é múltiplo de ",$n2;    
        }
    ?>
</body>
</html>

