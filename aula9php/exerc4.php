<?php
    #crie um vetor com 5 nomes e imprima o terceiro nome deste vetor.
    $nomes = array("Kauã", "João", "Marcos", "Maria", "Lais");
    echo $nomes[2], "<br>";
    
    $carros = array("gol", "celta", "corola", "corvete", "civic");

    foreach ($carros as $car ){ 
        echo $car, "<br>";
     }
    //A variável carros transfere todos os seua valores para
    //car para que todos os valores sejam percorridos
    echo "=====================<br>";
    array_push($carros, "hillux", "suv", "camaro"); //array_push insere valores no vetor
    foreach ($carros as $car ){ 
       echo $car, "<br>";
    }
?>