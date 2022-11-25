<?php
    $nome = array("Kauã","Marcos","João","Duda","Lais","Erick","Keyla","Juan","Kelly","Arthur");
    $nota = array(10,9,8,7,6,5,4,3,2,1);
    $contador = 0;
    $soma_nota = 0;
    foreach ($nota as $n) {
        $soma_nota = $soma_nota + $n;
        $contador = $contador + 1;
    }  
    echo "A nota total da turma é: ",$soma_nota;
    $media_nota = $soma_nota / $contador;
    echo "<br>A média da turma é: ", $media_nota;
?>