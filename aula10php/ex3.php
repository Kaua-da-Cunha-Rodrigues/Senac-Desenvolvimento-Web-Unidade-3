<?php
    $carros = array("gol","celta","fox","corolla","civic");
    $carros2 = array("simone -gol","jeniffer -celta","jordão - fox","sebastião -corolla","kauan -civic");
    foreach ($carros as $c) {
        echo $c, "<br>";
    }
    $c1 = array_pop($carros); 
    //array_pop apagou o último valor do vetor carros
    echo"<br>============================<br>";
    foreach ($carros as $n) {
        echo $n, "<br>";  
    }  
    echo"<br>============================<br>";
    $c2 = array_shift($carros2);
    //array_shift apaga o primeiro valor
    foreach ($carros2 as $n) {
        echo $n, "<br>";  
    } 

?>