<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc10.php">
        Digite um valor correspondente a um dua da semana: Ex(1-Domingo, 2-Segunda...) <br>
        <input type="text" name="n"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $n = $_GET["n"];
        switch ($n){
            case '1':
                echo"Você digitou o número ", $n , " correspondente a Domingo!";
            break;
            case '2':
                echo"Você digitou o número ", $n , " correspondente a Segunda-Feira!";
            break;
            case '3':
                echo"Você digitou o número ", $n , " correspondente a Terça-Feira!";
            break;
            case '4':
                echo"Você digitou o número ", $n , " correspondente a Quarta-Feira!";
            break;
            case '5':
                echo"Você digitou o número ", $n , " correspondente a Quinta-Feira!";
            break;
            case '6':
                echo"Você digitou o número ", $n , " correspondente a Sexta-Feira!";
            break;
            case '7':
                echo"Você digitou o número ", $n , " correspondente a Sábado!";
            break;
            default:
            echo"Valor inválido.";
            break;
        }    
    ?>
</body>
</html>