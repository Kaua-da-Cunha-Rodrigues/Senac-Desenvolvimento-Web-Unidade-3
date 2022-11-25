<?php
    echo"<br/>Operador de igual  ==";

    $x = 5;
    $y = 6;
    echo"<br/>valor x :".$x;  //5
    echo" <br/>valor y ".$y;  //6

    echo"<br/> Atribuição   =";
    $x = $y;  
    echo"<br/>valor x : ".$x;   //6
    echo" <br/>valor y : ".$y;   //6

    echo"<br/>Operador de igual  ==";
    $a = 5;
    $b = 10;
    $verdade = $a==$b;
    echo"<br/>$a  ".$a ;
    echo"<br/>$b ".$b ;
    echo"<br/>Operador de igual  ==";
    echo"<br/>Verdade    :  ".$verdade;
    // ele imprime vazio, pois não é verdadeiro

    $c = 10;
    $d = 10;
    $verdade1 = $c==$d;
    echo"<br/>$c  ".$c ;
    echo"<br/>$d ".$d ;
    echo"<br/>Operador de igual  ==";
    echo"<br/>Verdade1    :  ".$verdade1;
    // 1, pois  é verdadeiro
?>