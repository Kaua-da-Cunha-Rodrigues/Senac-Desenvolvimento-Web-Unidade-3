<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Salário</title>
</head>
<body>
    <form action="exerc7.php">
        Quanto você ganha por hora: <br/>
        <input type="text" name="ganho"> <br/>
        Quantas horas você trabalha por mês: <br/>
        <input type="text" name="hora"> <br/>
        <input type="submit"> <br/> 
    </form>    
    <?php
        $salario = $_GET["ganho"] * $_GET["hora"];
        echo "Você ganha por mês: ", $salario, " reais.";
    ?>
</body>
</html>