<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exerc17.php">
    <!--Faça um script para uma loja de tintas. O programa deverá pedir o 
    tamanho em metros quadrados da área a ser pintada. Considere que a 
    cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a 
    tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em 
    galões de 3,6 litros, que custam R$ 25,00. 
    •Informe ao usuário as quantidades de tinta a serem compradas e 
    os respectivos preços em 3 situações: 
    •comprar apenas latas de 18 litros; 
    •comprar apenas galões de 3,6 litros; 
    •misturar latas e galões, de forma que o preço seja o menor. 
    Acrescente 10% de folga e sempre arredonde os valores para 
    cima, isto é, considere latas cheias.  -->
        Informe a área quadrada a ser pintada: <br>
        <input type="text" name="area"> <br>
        <input type="submit"> <br>
    </form>  
    <?php
        $area = $_GET["area"];
        //1 litro pra 3 m quadrados
        // 18 litros 80 reais
        // 3.6 litros 25 reais
        $litros = round($area / 6 , 2); //round está definindo apenas 2 casas depois da vírgula
        $latas = ceil($area / 108); //Ceil está arredondando para cima. Floor arredonda para baixo
        $preco = $latas * 80;
        $latas2 = ceil($area / 21.6);
        $preco2 = $latas2 * 25;
        $lata3 = ceil($area / 129.8);
        $lata4 = ceil($lata3 / 21.6);
        $preço3 = ($lata3 * 80) + ($lata4 * 25);
        echo"<br>Área Quadrada para Pintar: ", $area;
        echo"<br>Quantidade de Latas (18 litros apenas): ", $latas; 
        echo"<br>Preço Total: ", $preco;
        echo"<br>Total de litros: ", $litros;
        echo"<br><br>Quantidade de Latas (3,6 litros apenas): ", $latas2;
        echo"<br>Preço Total:", $preco2;
        echo"<br>", $lata3, " ";
    ?>   
</body>
</html>