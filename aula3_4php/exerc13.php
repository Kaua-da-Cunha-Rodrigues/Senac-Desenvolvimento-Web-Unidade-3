<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delta e Raizes</title>
</head>
<body>
    <!--Faca um programa que calcule as raizes de uma equacao do segundo
    grau, na forma ax2 + bx + c. O programa devera pedir os valores de a, b e c e
    fazer as consistencias, informando ao usuario nas seguintes situacoes:
    Se o usuario informar o valor de A igual a zero, a equacao nao e do
    segundo grau e o programa nao deve fazer pedir os demais valores, sendo
    encerrado;
    Se o delta calculado for negativo, a equacao nao possui raizes reais.
    Informe ao usuario e encerre o programa;
    Se o delta calculado for igual a zero a equacao possui apenas uma raiz
    real; informe-a ao usuario;
    Se o delta for positivo, a equacao possui duas raiz reais; informe-as ao
    usuario;
    PS: Para achar a raiz quadrada da variavel x, faca: math.sqrt(x)
    --> 
    <form action="exerc13.php">
        Digite o valor de A: <br>
        <input type="text" name="valor_a"> <br>
        Digite o valor de B: <br>
        <input type="text" name="valor_b"> <br>
        Digite o valor de C: <br>
        <input type="text" name="valor_c"> <br> 
        <input type="submit"> <br> 
    </form> 
    <?php
        $valor_a = $_GET["valor_a"];
        $valor_b = $_GET["valor_b"];
        $valor_c = $_GET["valor_c"];
        $delta = ($valor_b ** 2) - ((4 * $valor_a) * $valor_c);
        $raiz1 = 0;
        $raiz2 = 0;
        if ($valor_a == 0){
            echo "O valor de A é igual a zero, ou seja, não se trata de uma equação do segundo grau";
        }else if($delta < 0){
            echo "Valor do Delta: ", $delta;
            echo"<br>Não existem raizes reais com delta negativo";
        }else if($delta == 0){
            $raiz1 = - $valor_b / (2*$valor_a);
            echo "<br>Valor de Delta: ", $delta;
            echo "<br>Valor da Raiz: ", $raiz1;
        }else if($delta > 0){
            $raiz1 = round((-$valor_b + sqrt($delta)) / (2*$valor_a), 2);
            $raiz2 = round((-$valor_b - sqrt($delta)) / (2*$valor_a),2);
            echo "<br>Valor de Delta: ", $delta;
            echo "<br>Valor da Raiz: ", $raiz1;
            echo "<br>Valor da segunda Raiz: ", $raiz2;
        }
    ?>
</body>
</html>