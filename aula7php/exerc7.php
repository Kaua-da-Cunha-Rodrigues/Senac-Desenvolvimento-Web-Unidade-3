<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exerc7.php">
        Digite um valor entre 1 e 10 para a tabuada: <br>
        <input type="text" name="n"> <br>
        <input type="submit"> <br>
    </form> 
    <?php
        /*
          Ler um valor inteiro (aceitar somente valores entre 1 e 10)
          e escrever a tabuada de 1 a 10 do valor lido. 
        */
        $n = $_GET["n"];
        if ($n >= 1 && $n <= 10){
            for($i=1; $i <= 10; $i++){
                echo "<br>". $n. " X ". $i. " = ". $i * $n;    
            }
        }else{
            echo"Digite um valor entre os permitidos";
        }
        
    ?>   
</body>
</html>