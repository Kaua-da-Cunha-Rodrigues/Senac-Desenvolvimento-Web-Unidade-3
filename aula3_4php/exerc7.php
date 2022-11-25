<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Site do Aluno</h1>
    <form action="exerc7.php">
        Digite seu nome: <br>
        <input type="text" name="nome"> <br>
        Em que turno você estuda? M-Matutino, V-Vespertino e N-Noturno: <br>
        <input type="text" name="turno"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $nome = $_GET["nome"];
        $turno = strtoupper($_GET["turno"]);
        if($turno == "M"){
            echo"Bom dia, ", $nome, "!";
        }else if($turno == "V"){
            echo"Boa tarde, ", $nome, "!";
        }else if($turno == "N"){
            echo"Boa noite, ", $nome, "!";
        }else{
            echo"Identificação do turno inválida.";
        }
        
    ?>
</body>
</html>