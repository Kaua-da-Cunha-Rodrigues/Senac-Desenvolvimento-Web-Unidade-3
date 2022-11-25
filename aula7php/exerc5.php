<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc5.php">
        Digite um valor: <br>
        <input type="number" name="n"> <br>
        <input type="submit" value="Enviar"> <br>
    </form> 
    <?php
    /*
      Modifique o exercício anterior para aceitar somente valores
      maiores que 0 para N. Caso o valor informado (para N) não
      seja maior que 0, deverá ser lido um novo valor para N
    */
    $n = floor($_GET["n"]); //Arredonda pra baixo
    if ($n > 0) {
        echo"Os valores de 1 até ". $n . " são: <br>";
        for ($i=1; $i <= $n; $i++){ 
            echo $i . "<br>";    
        }
    }else{
        echo"Digite um valor maior que 0";
    }
?>   
</body>
</html>
