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
        Faca um Programa que peca uma data no formato dd/mm/aaaa e
        determine se a mesma e uma data valida.
    -->
    <form action="exerc15.php">
        Digite um dia: <br>
        <input type="number" name="dia"> <br>
        Digite um mês: <br>
        <input type="text" name="mes"> <br>
        Digite um ano: <br>
        <input type="number" name="ano"> <br>
        <br> <input type="submit"> <br>
    </form>
    <?php
        $dia = $_GET["dia"];
        $mes = strtolower($_GET["mes"]);
        $ano = $_GET["ano"]; 
        //novembro, setembro, junho, abril 30 dias
        //Fevereiro 28 dias
        //Resto 31 dias
        if ($dia > 30 && $mes == "novembro" || $mes == "setembro" || $mes == "junho" || $mes == "abril"){
            echo "Entrada inválida, o mês de ",$mes," só tem 30 dias";
        }else if($dia > 28 && $mes == "fevereiro"){
            echo "Entrada inválida, o mês de ",$mes," só tem 28 dias";
        }else if ($dia > 31){
            echo"Entrada inválida, nenhum mês tem mais de 31 dias";
        }else if($mes <> "janeiro" && $mes <> "fevereiro"  && $mes <> "maio"  && $mes <> "abril" && $mes <> "março"  && $mes <> "junho"  && $mes <> "julho"  && $mes <> "agosto" && $mes <> "setembro" && $mes <> "outubro" && $mes <> "novembro" && $mes <> "dezembro"){
            echo "Digite um mês válido";
        }else if ($dia < 1){
            echo "Digite um dia válido";
        }else{
            echo $dia," de ",$mes," de ",$ano;
        }
    ?>
</body>
</html>