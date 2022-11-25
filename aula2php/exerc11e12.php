<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc11e12.php">
        Digite sua altura: <br>
        <input type="text" name="h"> <br>
        <input type="submit"> <br>        
    </form>
    <?php
        $altura = $_GET["h"];
        $pesoH = (72.7 * $altura) - 58; 
        $pesoM = (62.1 * $altura) - 44.7;
        echo"<br/>Peso ideal para homens: ", $pesoH;
        echo"<br/>Peso ideal para mulher: ", $pesoM;
    ?>
</body>
</html>