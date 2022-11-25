<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
     Faca um Programa que peca um numero e informe se o numero e inteiro
    ou decimal.   
     -->    
     <form action="exerc19.php">
        Informe um número: <br>
        <input type="text" name="numero"> <br>
        <input type="submit"> <br>   
     </form>
     <?php
        $numero = $_GET["numero"];
        $tipo = gettype($numero);
        if ($tipo == int){
            echo "O número é um inteiro";
        }else if($tipo == float){
            echo "O número é um decimal";
        }
     ?>
</body>
</html>