<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Dobro</title>
</head>
<body>
    <form action="ex2.php">
        Digite um valor: <br/>
        <input type="text" name="n1">
        <input type="submit">
    </form>
    <?php
        $num = $_GET["n1"];
        $dobro = $num * 2;
        echo"<br/>O número digitado é: ",$num;
        echo"<br/>O dobro do número é: ",$dobro;
    ?>
</body>
</html>