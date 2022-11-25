<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc4.php">
        Digite um valor: <br>
        <input type="number" name="n"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>    
</body>
</html>
<?php
    /*
      Ler um valor N e imprimir todos os valores inteiros entre 1
      (inclusive) e N (inclusive). Considere castque o N será sempre
      maior que ZERO.
    */
    $n = floor($_GET["n"]); //Arredonda pra baixo
        echo"Os valores de 1 até ". $n . " são: <br>";
        for ($i=1; $i <= $n; $i++) { 
            echo $i . "<br>";    
        }

    

?>