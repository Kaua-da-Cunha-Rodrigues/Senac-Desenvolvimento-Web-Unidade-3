<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Quadrado</title>
</head>
<body>
    <form action="exerc6.php">
        Digite o valor dos lados do quadrado: <br/>
        <input type="text" name="lados"> <br/>
        <input type="submit"> <br/>
    </form>  
    <?php
        $area = $_GET["lados"] * 4;
        echo "<br/>Valor dos lados: ", $_GET["lados"];
        echo "<br/>Valor da área: ", $area;
        echo "<br/>Valor do DOBRO da área: ", $area * 2;
    ?>
</body>
</html>