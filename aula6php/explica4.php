<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ternário em php</h1>
    <form action="explica4.php">
        Informe sua idade: <br>
        <input type="text" name="idade"> <br>
        <input type="submit"> <br>
    </form>    
    <?php
        $idade = $_GET["idade"];
        /*
          O ternário é geralmente utilizado quando se tem uma condição
          de verdadeiro e falso. Caso seja verdadeiro, faz algo e caso seja falso faz outra
        */
        echo($idade >=18)?"Já pode dirigir":"Não pode dirigir"
    ?>
</body>
</html>