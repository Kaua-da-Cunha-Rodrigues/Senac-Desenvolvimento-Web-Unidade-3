<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metros para Milímetros</title>
</head>
<body>
    <form action="exerc4.php">
        Digite um valor em metros: <br/>
        <input type="text" name="metros"> <br/>
        <input type="submit">
    </form> 
    <?php
        $milimetro = $_GET["metros"] * 1000;
        echo "<br/>Valor em metros: ", $_GET["metros"], "m";
        echo "<br/>Valor em Milímetros: ", $milimetro, "mm";
    ?>
</body>
</html>