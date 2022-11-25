<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um script que pergunte quanto você ganha por hora e o 
    número de horas trabalhadas no mês. Calcule e mostre o total do seu 
    salário no referido mês, sabendo-se que são descontados 11% para o 
    Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um 
    programa que nos dê: 
    •salário bruto. 
    •quanto pagou ao INSS. 
    •quanto pagou ao sindicato. 
    •o salário líquido. 
    •calcule os descontos e o salário líquido, conforme a tabela 
    abaixo: 
    + Salário Bruto : R$ 
    - IR (11%) : R$ 
    - INSS (8%) : R$ 
    - Sindicato ( 5%) : R$ 
    = Salário Liquido : R$ 
    Obs.: Salário Bruto - Descontos = Salário Líquido.  -->
    <form action="exerc15.php">
        Quanto você ganha por hora: <br>
        <input type="text" name="ganho"> <br>
        Quantas horas você trabalha no mês: <br>
        <input type="text" name="horas"> <br>
        <input type="submit"> <br>   
    </form>
    <?php
        $ganho = $_GET["ganho"];
        $horas = $_GET["horas"];
        $salarioB = $ganho * $horas;
        $imposto = ($salarioB * 11) / 100; 
        $inss = ($salarioB * 8) / 100;
        $sind = ($salarioB * 5) / 100;
        $salarioL = $salarioB - $imposto - $inss - $sind;
        echo"<br/>Salário Bruto: ", $salarioB, " reais";
        echo"<br/>Imposto: ", $imposto, " reais";
        echo"<br/>INSS: ", $inss, " reais";
        echo"<br/>Sindicato: ", $sind;
        echo"<br/>Salário Líquido: ", $salarioL;
    ?>
</body>
</html>