<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Faca um programa para o calculo de uma folha de pagamento, sabendo 
que os descontos sao do Imposto de Renda, que depende do salario bruto 
(conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 
11% do Salario Bruto, mas nao e descontado (e a empresa que deposita). O 
Salario Liquido corresponde ao Salario Bruto menos os descontos. O 
programa devera pedir ao usuario o valor da sua hora e a quantidade de 
horas trabalhadas no mes. 
Desconto do IR: 
Salario Bruto ate 900 (inclusive) - isento 
Salario Bruto ate 1500 (inclusive) - desconto de 5% 
Salario Bruto ate 2500 (inclusive) - desconto de 10% 
Salario Bruto acima de 2500 - desconto de 20% Imprima na tela as 
informacoes, dispostas conforme o exemplo abaixo.
No exemplo o valor da 
hora e 5 e a quantidade de hora e 220. 
Salario Bruto: (5 * 220) : R$ 1100,00 
(-) IR (5%) : R$ 55,00 
(-) INSS ( 10%) : R$ 110,00 
FGTS (11%) : R$ 121,00 
Total de descontos : R$ 165,00 
Salario Liquido : R$ 935,00  -->
    <form action="exerc9.php">
        Digite quanto você ganha por hora: <br>
        <input type="text" name="ganho"> <br>
        Digite suas horas trabalhadas no mês: <br>
        <input type="text" name="hora"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $ganho = $_GET["ganho"];
        $hora = $_GET["hora"];
        $salarioBruto = $ganho * $hora;
        $inss = ($salarioBruto * 10) / 100;
        $fgts = ($salarioBruto * 11) / 100; 
        if($salarioBruto > 2500){
            $imposto = ($salarioBruto * 20) / 100;
            $ir = 20;    
        }else if($salarioBruto > 1500){
            $imposto = ($salarioBruto * 10) / 100;
            $ir = 10;
        }else if($salarioBruto > 900){
            $imposto = ($salarioBruto * 5) / 100;
            $ir = 5;
        }else{
            $ir = 0;
            $imposto = 0;
        }
        $totalDesconto = $inss + $imposto;
        $salarioLiquido = $salarioBruto - $totalDesconto;
        echo"<br>Salário Bruto: ", $salarioBruto;
        echo"<br>(-) IR (", $ir, "%): R$", $imposto; 
        echo"<br>(-) INSS (10%): ",$inss;
        echo"<br>(-) FGTS(11%): ",$fgts;
        echo"<br>Total de Descontos: ", $totalDesconto;
        echo"<br>Salário Líquido: ", $salarioLiquido;
    ?>
</body>
</html>