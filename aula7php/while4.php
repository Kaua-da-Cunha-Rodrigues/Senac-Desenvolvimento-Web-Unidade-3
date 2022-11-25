<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form action="while4.php">
        Digite um número: <br>
        <input type="number" name= "n"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>
    <?php
        $n = $_GET["n"]; 
        $i = 0;
        while($i <= $n){
            $soma = $soma + $i;
            $i++; //é igual a $i = $i + 1;
        }    
        echo"A soma de todos os números de 0 até ", $n, " é: ", $soma;   
    ?>  
</body>
</html>