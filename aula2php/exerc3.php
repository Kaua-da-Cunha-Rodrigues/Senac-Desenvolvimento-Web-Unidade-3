<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <form action="exerc3.php">
        Digite um número para a soma: <br/>
        <input type="text" name="n1"> <br/>
        Digite o último número da soma: <br/>
        <input type="text" name="n2"> <br/>
        <input type="submit">
    </form>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $soma = $n1 + $n2;
        echo "A soma é: ",$soma;
    ?>
</body>
</html>