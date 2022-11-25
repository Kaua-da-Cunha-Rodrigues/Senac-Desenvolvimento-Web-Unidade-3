<?php
    $vetor = range(1, 100);
    $soma_total = 0;
    foreach ($vetor as $n){
        $soma_total = $soma_total + $n;
    }
    echo $soma_total;
?>