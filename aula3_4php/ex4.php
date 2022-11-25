<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador para Votação</h1> <hr>
    <form action="ex4.php">
        Informe sua idade: <br/>
        <input type="text" name="idade"> <br/>
        <input type="submit"> <br>   
    </form>  
    <?php
        $idade = $_GET["idade"];
        // if simples

        /*
            if($idade >= 16){
                echo"Você já pode votar";
            }
        */
        // if composto
        if($idade >= 16){
            echo"Você já pode votar.";
        }else{
            echo"Você não pode votar";
        }
    ?>
</body>
</html>