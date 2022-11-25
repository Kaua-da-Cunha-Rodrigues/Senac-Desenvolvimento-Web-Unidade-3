<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aula.3php">

    </form>
    <?php
        echo"Bom dia Gente!!!!<br/>";
        echo"P","H","P";
        echo"<br/>";
        print"Novamente Bom dia<br/>";
        $x = 5;
        $y = 5;
        // = atribuição
        echo"<br/>x : ".$x;
        echo"<br/>y : ".$y;
        echo"<br/>";

    // = Atribuição
    // == Comparação (se é igual a algo)
    // != Diferente
    // <> Diferente
    // > Maior
    // < Menor
    // >= Maior ou Igual
    // <= Menor ou igual

    if($x != $y){
        // se for verdadeiro ele entra e imprime
        echo"X é diferente de Y";
    }
    if($x == $y){
        // se for verdadeiro ele entra e inprime
        echo"X é igual a Y";
    }
    ?>
</body>
</html>