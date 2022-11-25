<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano Bissexto</title>
</head>
<body>
    <form action="exerc14.php">
        Digite um ano: <br>
        <input type="text" name="ano">
        <input type="submit">
    </form> 
    <?php
        $ano = $_GET["ano"];
        if ($ano % 4 == 0){
            echo "O ano de ", $ano, " é um ano bissexto";
        }else{
            echo "O ano de ", $ano, " não é um ano bissexto";
        }
    ?>
</body>
</html>