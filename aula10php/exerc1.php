<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    // Entre com os dados de 10 alunos de uma turma, 
    //recebendo as informações como nome e uma nota do 
    //aluno. Armazene estes dados em um vetor. Ao final 
    //do programa mostrar a média de classe, o nome do aluno 
    //obteve uma nota maior.  
    $nome = array("Kauã","Marcos","João","Duda","Lais","Erick","Keyla","Juan","Kelly","Arthur");
    $nota = range(10,1);
    $maior = 0;
    $contador = 0;
    $soma_nota = 0;
    $media = 0;
    foreach($nota as $n){
        echo $n, "<br>"; 
        $soma_nota = $soma_nota + $n;
        if ($n > $maior) {
           $maior = $n;
           $nome_nota = $nome[$contador];
        } 
        $contador++;
    } 
    $media = $soma_nota / 10;
    echo "A maior nota ", $maior, " e foi do aluno ", $nome_nota;

?>