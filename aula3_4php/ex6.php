<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php">
        Digite sua idade <br>
        <input type="text" name="idade"> <br>
        <input type="submit"> <br>
    </form>    
    <?php
        $idade = $_GET["idade"]
        if($idade < 16){
            echo"Não vota";
        }else if ($idade < 18){
            echo"Voto facultativo";
        }else if ($idade < 70){
            echo"Voto obrigatório";
        }else{
            echo"Voto facultativo";
        }
    ?>
</body>
</html>
