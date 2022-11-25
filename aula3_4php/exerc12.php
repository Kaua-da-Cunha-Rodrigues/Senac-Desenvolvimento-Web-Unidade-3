<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Triangulo</title>
</head>
<body>
<!-- Faca um Programa que peca os 3 lados de um triangulo. O programa
devera informar se os valores podem ser um triangulo. Indique, caso os
lados formem um triangulo, se o mesmo e: equilatero, isosceles ou escaleno.
Dicas:
Tres lados formam um triangulo quando a soma de quaisquer dois lados
for maior que o terceiro;
Triangulo Equilatero: tres lados iguais;
Triangulo Isosceles: quaisquer dois lados iguais;
Triangulo Escaleno: tres lados diferentes; -->

    <form action="exerc12.php">
        Digite um lado de um triângulo: <br>
        <input type="text" name="l1"><br>
        Digite o outro lado de um triângulo: <br>
        <input type="text" name="l2"> <br>
        Digite o último lado de um triângulo: <br>
        <input type="text" name="l3"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>
    <?php
        $l1 = $_GET["l1"];
        $l2 = $_GET["l2"];
        $l3 = $_GET["l3"];
        if($l1 + $l2 > $l3 && $l1 + $l3 > $l2 && $l2 + $l3 > $l1){
            echo"Os números digitados podem formar um triangulo";
            $triangulo_formado = 1;
        }else{
            echo"Os números digitados não podem formar um triangulo";
            $triangulo_formado = 0;
        }
        if($triangulo_formado == 1 && $l1 == $l2 && $l2 == $l3){
            echo"<br>Seu triangulo é: Equilatero";
        }else if($triangulo_formado == 1 && $l1 == $l2 && $l1 <> $l3 || $l1 == $l3 && $l1 <> $l2 || $l2 == $l3 && $l2 <> $l1){
            echo"<br>Seu triangulo é: Isósceles";
        }else if($triangulo_formado == 1 && $l1 <> $l2 && $l1 <> $l3 && $l2 <> $l3){
            echo"<br>Seu triangulo é: Escaleno";    
        }
    ?>
</body>
</html>