<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um script que peça o tamanho de um arquivo para download 
    (em MB) e a velocidade de um link de Internet (em Mbps), calcule e 
    informe o tempo aproximado de download do arquivo usando este link 
    (em minutos).  --> 
    <form action="exerc18.php">
        Digite o tamanho do arquivo para download (em MB): <br>
        <input type="text" name="tamanho"> <br>
        Digite a velocidade de download da internet (em Mbps): <br>
        <input type="text" name="veloc"> <br>
        <input type="submit"> <br>
    </form>   
    <?php
        $tamanho = $_GET["tamanho"];
        $veloc = $_GET["veloc"];
        $tempo = $tamanho / $veloc;
        $tempoMin = $tempo / 60;
        echo"O download será feito em ", $tempo, " segundos ou ", round($tempoMin, 2), " minutos.";
    ?>
</body>
</html>