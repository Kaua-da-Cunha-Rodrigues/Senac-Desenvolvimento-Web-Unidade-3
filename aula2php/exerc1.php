<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de área e Circunferência</title>
</head>
<body>
    <form action="exerc1.php">
        Digite o valor do raio: <br/>
        <input type="number" name="raio"> <br/>
        <br/>
        <input type="submit">
    </form>
    <?php
    $raio = $_GET["raio"];
    $area = 3.14 * $raio**2; //Dois pontos pra representar um número elevado a outro
    $circun = 2 * 3.14 * $raio;
    echo"<br/>Área: ",$area;
    echo"<br/>Circunferência: ",$circun;
    ?>
</body>
</html>