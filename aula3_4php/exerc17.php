<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Faca um Programa que leia um numero inteiro menor que 1000 e
        imprima a quantidade de centenas, dezenas e unidades do mesmo.
        Observando os termos no plural a colocacao do "e", da virgula entre outros.
        Exemplo:
        326 = 3 centenas, 2 dezenas e 6 unidades
        12 = 1 dezena e 2 unidades Testar com: 326, 300, 100, 320, 310,305, 301,
        101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16
     -->   
     <form action="exerc17.php">
        Digite um número inteiro menor que 1000: <br>
        <input type="text" name="numero"> <br>
        <input type="submit"> <br>
     </form> 
     <?php
        $numero = $_GET["numero"];
        $dig1 = strval(abs($numero))[0];
        if ($numero > 1000){
            echo "O valor digitado ultrapassa o valor máximo de 1000";
        }else if(strlen($numero) == 4){
            $dig2 = strval(abs($numero))[1];
            $dig3 = strval(abs($numero))[2];
            $dig4 = strval(abs($numero))[3];
            echo $dig1, " milhar ",$dig2," centena(s) ",$dig3, " dezena(s) ", $dig4, " unidade(s)";
        }else if(strlen($numero) == 3){
            $dig2 = strval(abs($numero))[1];
            $dig3 = strval(abs($numero))[2];
            echo $dig1," centena(s) ",$dig2, " dezena(s) ", $dig3, " unidade(s)";
        }else if(strlen($numero) == 2){
            $dig2 = strval(abs($numero))[1];
            echo $dig1, " dezena(s) ", $dig2, " unidade(s)";
        }else{
            echo $dig1, " unidade(s)";
        }
     ?>
</body>
</html>