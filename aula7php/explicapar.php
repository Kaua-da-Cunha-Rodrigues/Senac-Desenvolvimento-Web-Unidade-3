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
    <form action="while3.php">
        Digite um número: <br>
        <input type="number" name= "n"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>  
    <?php
        $n = $_GET["n"];
        if ($n%2 == 0){
            echo"O número ", $n, " é par!";   
        }else{
            echo"O número ", $n, " é ímpar!";        
        } 
    ?>
</body>
</html>