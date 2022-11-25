<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farenheit para Celsius</title>
</head>
<body>
    <form action="exerc9.php">
        Digite uma temperatura em Celsius: <br/>
        <input type="text" name="c"> <br/>
        <input type="submit"> <br/>
    </form>
    <?php
        $c = $_GET["c"];
        $f = ($c * 9/5) + 32;
        echo "<br/>Graus em Celsius: ", $c;
        echo "<br/>Graus em Farenheit: ", $f;
    ?>
</body>
</html>