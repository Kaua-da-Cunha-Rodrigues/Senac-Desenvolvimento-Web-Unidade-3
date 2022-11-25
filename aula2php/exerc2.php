<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Número</title>
</head>
<body>
    <form action="exerc2.php">
        Digite um número: <br/>
        <input type="text" name="n">
        <input type="submit">
    </form>
    <?php
        echo"Seu número foi: ",$_GET["n"];
    ?>
</body>
</html>