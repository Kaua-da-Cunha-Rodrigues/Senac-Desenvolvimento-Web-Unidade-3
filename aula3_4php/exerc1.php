<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faca um Programa que verifique se uma letra digitada e vogal ou 
    consoante.  -->
    <h1>Identificador de Consoante e Vogal</h1>   
    <form action="exerc1.php">
        Digite uma letra: <br>
        <input type="text" name="letra"> <br>
        <input type="submit"> <br>
    </form> 
    <?php
        $letra = strtoupper($_GET["letra"]); //strtoupper deixa maiúsculo
        $vogais = array("A","E","I","O","U"); //array está criando um vetor que armazena vários valores
        if ($letra == in_array($letra, $vogais)){ //in_array ele checa os valores que existem no array
            echo"A letra '",$letra, "' é uma vogal";
        }else{
            echo"A letra '",$letra, "' é uma consoante";
        }

        /* outro jeito de fazer
            if($letra == "a" ||$letra == "e"||$letra == "i"||$letra == "o"||$letra == "u" )
            
            || ou V ou + (em outras linguagens): significa OU para a função if ,ou seja, ou um ou outro.
            E ou & ou *: significa AND, ou seja, os dois devem ser cumpridos.
            */
    ?>
</body>
</html>