<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farenheit para Celsius</title>
</head>
<body>
    <form action="exerc8.php">
        Digite uma temperatura em Farenheit: <br/>
        <input type="text" name="f"> <br/>
        <input type="submit"> <br/>
    </form>
    <?php
        $f = $_GET["f"];
        $c = (5 * ($f - 32) / 9);
        echo "Graus em Farenheit: ", $f;
        echo "<br/>Graus em Celsius: ", $c;
    ?>
</body>
</html>