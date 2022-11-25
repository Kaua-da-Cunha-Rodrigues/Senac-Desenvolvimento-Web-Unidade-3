<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo </title>
</head>
<body>
    <form action="exerc10.php">
        Digite um número inteiro: <br/>
        <input type="text" name="n1"> <br/>
        Digite outro número inteiro: <br/>
        <input type="text" name="n2"> <br/>
        Digite um número real: <br/>
        <input type="text" name="n3"> <br/>
        <input type="submit"> <br/>
    </form> 
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $v1 = ($n1 * 2) + ($n2 / 2);
        $v2 = ($n1 * 3) + $n3;
        $v3 = $n3**3;
        echo"<br/>O produto do dobro do primeiro com metade do segundo: ",$v1;
        echo"<br/>A soma do triplo do primeiro com o terceiro: ",$v2;
        echo"<br/>O terceiro elevado ao cubo: ",$v3;
    ?>
</body>
</html>