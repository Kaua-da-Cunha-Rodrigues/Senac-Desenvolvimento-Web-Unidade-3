<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Segundos</title>
</head>
<body>
    <form action="exerc5.php">
        Digite uma quantidade de dias: <br/>
        <input type="text" name="dias"> <br/>
        Digite uma quantidade de horas: <br/>
        <input type="text" name="hr"> <br/>
        Digite uma quantidade de minutos: <br/>
        <input type="text" name="min"> <br/>
        Digite uma quantidade de segundos: <br/>
        <input type="text" name="sec"> <br/>
        <input type="submit">
    </form>  
    <?php
        $secDay = $_GET["dias"] * 86400;
        $secHr = $_GET["hr"] * 3600;
        $secMin = $_GET["min"] * 60;
        $sec = $_GET["sec"];
        $secTotal = $secDay + $secHr + $secMin + $sec;
        echo $_GET["dias"], " dia(s), ", $_GET["hr"], " hora(s) ", $_GET["min"], " minutos e ", $_GET["sec"], " segundos da um total de: ", $secTotal, " segundos.";
    ?>
</body>
</html>