<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--O programa deverá pedir o 
    tamanho em metros quadrados da área a ser pintada. Considere que a 
    cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a 
    tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao 
    usuário a quantidades de latas de tinta a serem compradas e o preço 
    total.  -->  
    <form action="exerc16.php">
        Informe a área quadrada a ser pintada: <br>
        <input type="text" name="area"> <br>
        <input type="submit"> <br>
    </form>  
    <?php
        $area = $_GET["area"];
        //1 litro pra 3 m quadrados
        // 18 litros 80 reais
        $litros = round($area / 3, 2) ; //round está definindo apenas 2 casas depois da vírgula
        $latas = ceil($area / 54); //Ceil está arredondando para cima. Floor arredonda para baixo
        $preco = $latas * 80;
        echo"Área Quadrada para Pintar: ", $area;
        echo"<br>Quantidade de Latas: ", $latas; 
        echo"<br>Preço Total: ", $preco;
        echo"<br>Total de litros: ", $litros;
    ?>
</body>
</html>