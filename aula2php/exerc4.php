<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>
<body>
    <!--Entrada de Dados -->
    <form action="exerc4.php" method="get">
        Digite a primeira nota:<br/> 
        <input type="number" name="nota1"> <br/> <!--o name é tipo um id, ele serve depois pra que esse valor seja jogado em uma variável -->
        Digite a segunda nota: <br/>
        <input type="number" name="nota2"> <br/>
        Digite a terceira nota: <br/>
        <input type="number" name="nota3"> <br/>
        <br/><input type="submit" value="Fazer a média"> 
    </form>    
    <!-- Processamento de dados -->
    <?php
        // declaração de variável
        $nota1 = $_GET["nota1"]; //O get serve pra pegar o valor que foi digitado no input
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];
        // processamento
        $media = ($nota1 + $nota2 + $nota3) / 3;
        // Saída
        echo"<br/>Média: ",$media;
    ?>
</body>
</html>