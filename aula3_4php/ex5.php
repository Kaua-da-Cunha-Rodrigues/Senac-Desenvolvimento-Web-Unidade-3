<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Confira se você já pode dirigir</h1>
    <form action="ex5.php">
        Informe sua idade: <br>
        <input type="text" name="idade"> <br>
        <input type="submit"> <br>
    </form>    
    <?php
        $idade = $_GET["idade"];
        if($idade >=18){
            echo"Você já pode dirigir! Basta tirar sua habilitação de motorista.";
        }else{
            echo"Você ainda não pode dirigir. Espere até completar 18 anos...";
        }
    ?>
</body>
</html>