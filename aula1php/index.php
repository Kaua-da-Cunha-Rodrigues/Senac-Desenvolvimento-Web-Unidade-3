<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 php</title>
</head>
<body>
    <h1>Primeira Aula de Lógica de Programação com php</h1>   
    <?php
        echo"<h1>Bem vindo ao PHP</h1><hr/>";
        // declaração de variaveis (ENTRADA)

        $nome = "Kauã"; // String = Texto
        $idade = 18; //inteiro
        $salario = 4750.03; //real/double/float
        $email = "KAUA@SENAC.RJ.COM.BR"; //string

        //               PROCESSAMENTO

        //imprimir na tela (SAÍDA)

        echo"<br/>Nome: ".$nome; //O ponto antes do $ serve para concatenar (juntar)
        $nome = strtoupper($nome); // Pegou a variável nome, deixou maiúsculo e jogou o resultado na variável nome
        $email = strtolower($email); // Pegou a variável email, deixou minúsculo e jogou o resultado na variável email
        echo"<br/>Nome: ".$nome;
        echo"<br/>Email: ".$email;
        echo"<br/>Idade: ".$idade;
        echo"<br/>Salário: ".$salario;

        // Caso eu queira comentar em php eu utilizo

        /*
        comentário de bloco, se eu estiver
        dentro tudo que eu escrever
        é comentário
        */
        
    ?>
</body>
</html>