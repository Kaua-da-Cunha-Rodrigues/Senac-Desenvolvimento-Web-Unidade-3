<?php
    $carros = array("gol","celta","fox","corolla","civic");
    $carros2 = array("simone -gol","jeniffer -celta","jordão - fox","sebastião -corolla","kauan -civic");
    
    $achei = in_array("civic",$carros); //in_array procura o valor dentro do vetor
    $achei2 = in_array("honda",$carros); //in_array procura o valor dentro do vetor

    echo $achei; //Ele irá retornar 1 porque é verdadeiro
    echo "<br>", $achei2; //ele irá retornar 0 ou nada porque é falso
    
    //ordenação
    
    sort($carros);
    foreach ($carros as $n) {
        echo $n, "<br>";
    }
    
?>