<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc2.php">
        Digite um valor: <br>
        <input type="number" name="nota"> <br> <br>
        <input type="submit"> <br>
    </form>
    <?php
        /*Escreva um programa em php que permita a leitura
        das notas de uma turma de 20 alunos. Calcular a média
        da turma e contar quantos alunos obtiveram nota acima
        desta média calculada. Escrever a média da turma e o
        resultado da contagem. */
        $nota = range(1,20);
        $soma = 0;
        $acima_media = 0;
        foreach ($nota as $n) {
            $soma = $n + $soma;
        } 
        $media = $soma / count($nota);
        for ($i=0; $i < 20 ; $i++) { 
            if ($nota[$i] >= 10.5){
                $acima_media = $acima_media + 1;
            }
        }
        echo "<br>Quantidade de alunos: ", count($nota); #conta o tamanho do vetor
        echo "<br>Média da turma: ", $media;
        echo "<br>Alunos acima da média: ", $acima_media;
    ?>
</body>
</html>
