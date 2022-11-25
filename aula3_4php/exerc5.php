<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc5.php">
        Digite um número: <br> 
        <input type="text" name="n1"> <br>
        Digite outro número: <br> 
        <input type="text" name="n2"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        if($n1 <> $n2){
            $aux = $n1;
            $n1 = $n2;
            $n2 = $aux;
        }
        echo"Os valores trocados ficam: ", $n1, ", ", $n2;
    ?>
</body>
</html>