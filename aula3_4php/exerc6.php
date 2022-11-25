<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc6.php">
        Digite o primeiro valor: <br>
        <input type="text" name="n1"> <br>
        Digite o segundo valor: <br>
        <input type="text" name="n2"> <br>
        Digite o terceiro valor: <br>
        <input type="text" name="n3"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];  
        if($n2 < $n1){
            $temp = $n1;
            $n1 = $n2;
            $n2 = $temp;
        }
        if($n3 < $n1){
            $temp = $n1;
            $n1 = $n3;
            $n3 = $temp;
        }
        if($n3 < $n2){
            $temp = $n2;
            $n2 = $n3;
            $n3 = $temp;
        } 
        echo"Ordem decrescente dos números digitados: ", $n3, ", ", $n2, ", ", $n1; 