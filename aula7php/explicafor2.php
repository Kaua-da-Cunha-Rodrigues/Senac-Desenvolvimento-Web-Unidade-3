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
    <form action="explicafor2.php">
        Digite um número: <br>
        <input type="number" name= "n"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>   
    <?php
        $n = $_GET["n"];
        for ($i=0; $i <= 10; $i++){ 
            echo $n, " X ", $i, " = ", $n * $i, "<br>";
        }
    ?>
</body>
</html>