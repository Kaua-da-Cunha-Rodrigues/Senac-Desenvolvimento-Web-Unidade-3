<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faca um programa que pede duas notas de um aluno. Em seguida ele 

    deve calcular a media do aluno e dar o seguinte resultado: 

    A mensagem "Aprovado", se a media alcancada for maior ou igual a sete; 

    A mensagem "Reprovado", se a media for menor do que sete; 

    A mensagem "Aprovado com Distincao", se a media for igual a dez. -->  
    <form action="exerc2.php">
        Digite sua primeira nota: <br>
        <input type="text" name="nota1"> <br>
        Digite sua segunda nota: <br>
        <input type="text" name="nota2"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2) / 2;
        if ($media < 7){
            echo"<br>Média: ",$media;
            echo"<br>Situação: REPROVADO";
        }else if ($media < 10){
            echo"<br>Média: ",$media;
            echo"<br>Situação: APROVADO";    
        }else{
            echo"<br>Média: ",$media;
            echo"<br>Situação: APROVADO COM DISTINÇÃO";
        }
    ?>
</body>
</html>