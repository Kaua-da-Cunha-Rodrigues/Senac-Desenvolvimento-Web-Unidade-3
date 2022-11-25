<?php
    //Primeiro jeito de criar vetor
    $carros = array("gol", "celta", "corola", "corvete", "civic");
    //Segundo jeito de criar vetor
    $carros1[]="uno";
    $carros1[]="chevete";
    $carros1[]="fiat";
    $carros1[]="classic";
    $carros1[]="bmw";
    $carros1[]="palio";
    var_dump($carros);
    echo"<br>===========================<br>";
    var_dump($carros1);
    echo"<br>===========================<br>";
    echo "<br>Eu tenho um ".$carros1[3]. "<br>";
    echo"<br>===========================<br>";
    for ($i=0;  $i <= 4; $i++) { 
        echo $carros1[$i], "<br>";
    }
?>