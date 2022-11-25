<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faca um programa que recebe o salario de um colaborador e o reajuste 
segundo o seguinte criterio, baseado no salario atual: 
salarios ate R$ 280,00 (incluindo) : aumento de 20% 
salarios entre R$ 280,00 e R$ 700,00 : aumento de 15% 
salarios entre R$ 700,00 e R$ 1500,00 : aumento de 10% 
salarios de R$ 1500,00 em diante : aumento de 5% Apos o aumento ser 
realizado, informe na tela: 
o salario antes do reajuste; 
o percentual de aumento aplicado; 
o valor do aumento; 
o novo salario, apos o aumento.  -->    
    <form action="exerc8.php">
        Digite seu salário para reajuste: <br>
        <input type="text" name="salario"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>
    <?php
        $salario = $_GET["salario"];
        $reaj5 = 0.05;
        $reaj10 = 0.1;
        $reaj15 = 0.15;
        $reaj20 = 0.20;
        if($salario <= 280){
            $salario2 = $salario + ($salario * $reaj20);
            echo"Percentual de Aumento Aplicado: %", $reaj20 * 100;
            echo"<br>Valor do Aumento: ", $salario * $reaj20;
        }else if($salario < 700){
            $salario2 = $salario + ($salario * $reaj15);
            echo"Percentual de Aumento Aplicado: %", $reaj15 * 100;
            echo"<br>Valor do Aumento: ", $salario * $reaj15;
        }else if($salario < 1500){
            $salario2 = $salario + ($salario * $reaj10);
            echo"Percentual de Aumento Aplicado: %", $reaj10 * 100;
            echo"<br>Valor do Aumento: ", $salario * $reaj10;
        }else{
            $salario2 = $salario + ($salario * $reaj5);
            echo"Percentual de Aumento Aplicado: %", $reaj5 * 100;
            echo"<br>Valor do Aumento: ", $salario * $reaj5;
        }
        echo"<br>Salário Antes do Reajuste: ", $salario;
        echo"<br>Novo Salário: ", $salario2;
    ?>
</body>
</html>