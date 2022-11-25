<?php
    /*
    Range() preencher um array com numeros 
    */

    $dado = range(1, 6); //Começa com um valor e terminha com 6 (no caso vai índice 0 a 5)
    var_dump($dado);
    for ($i=0; $i <= 5; $i++){ 
        echo "<br>", $dado[$i];
    }
    $alfabeto = range("a","z");
    echo "<br>=================<br>";
    var_dump($alfabeto);
?>