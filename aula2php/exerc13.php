<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Toda vez que ele traz um peso de peixes maior que o estabelecido pelo 
    regulamento de pesca do estado de São Paulo (50 quilos) deve pagar 
    uma multa de R$ 4,00 por quilo excedente. João precisa que você faça 
    um programa que leia a variável peso (peso de peixes) e calcule o 
    excesso. Gravar na variável excesso a quantidade de quilos além do 
    limite e na variável multa o valor da multa que João deverá pagar. 
    Imprima os dados do script com as mensagens adequadas.  -->  
    <form action="exerc13.php">
        Informe o peso do peixe: <br>
        <input type="text" name="peso"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $peso = $_GET["peso"];
        $multa = 0;
        if ($peso > 50){
            $multa = ($peso - 50) * 4;
            echo"Você pagará uma multa de: ", $multa, " reais.";
        }else{
            echo"Você não precisa pagar multa.";
        }
    ?>
</body>
</html>