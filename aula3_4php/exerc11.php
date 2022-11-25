<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>
<body>
    <form action="exerc11.php" method="get">
        Digite a primeira nota:<br/> 
        <input type="number" name="nota1"> <br/> 
        Digite a segunda nota: <br/>
        <input type="number" name="nota2"> <br/>
        <br/><input type="submit" value="Fazer a média"> 
    </form>    
    <?php
        $nota1 = $_GET["nota1"]; 
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2) / 2;
        if($media <= 4){
            $indice = "E";
        }else if($media <= 6){
            $indice = "D";
        }else if($media <= 7.5){
            $indice = "C";
        }else if($media <= 9){
            $indice = "B";
        }else{
            $indice = "A";
        }

        if ($indice == "A" || $indice == "B" || $indice == "C"){
            $status = "APROVADO";
        }else{
            $status = "REPROVADO";
        }
        echo"<br>Primeira Nota: ", $nota1;
        echo"<br>Segunda Nota: ", $nota2;
        echo"<br>Índice do Aluno:", $indice;
        echo"<br>Status: ", $status;
        echo"<br/>Média: ",$media;
    ?>
</body>
</html>