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
    Faca um Programa para um caixa eletronico. O programa devera
    perguntar ao usuario a valor do saque e depois informar quantas notas de
    cada valor serao fornecidas. As notas disponiveis serao as de 1, 5, 10, 50 e
    100 reais. O valor minimo e de 10 reais e o maximo de 600 reais. O
    programa nao deve se preocupar com a quantidade de notas existentes na
    maquina.
     -->    
    <h1>Caixa Eletrônico</h1>
    <hr>
    <form action="exerc18.php">
        Digite um valor para saque: <br>
        <input type="number" name="valor_saque"> <br>
        <input type="submit"> <br>
    </form>
    <?php
        $valor_saque = 0;
        $valor_saque = $_GET["valor_saque"];
        $notas1 = 0;
        $notas5 = 0;
        $notas10 = 0;
        $notas50 = 0;
        $notas100 = 0;
        $aux = $valor_saque;
        do{
            if ($aux >= 100){
                $aux = $aux - 100;
                $notas100++;
            }else if ($aux >= 50){
                $aux = $aux - 50;
                $notas50++;
            }else if ($aux >= 10){
                $aux = $aux - 10;
                $notas10++;
            }else if ($aux >= 5){
                $aux = $aux - 5;
                $notas5++;
            }else if ($aux >= 5){
                $aux = $aux - 1;
                $notas1++;
            }
        }while($aux <= 0);
        echo $aux;
    ?>
</body>
</html>