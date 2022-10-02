<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Conversor de tempetura</title>
</head>
<body>
    <h3>Conversor de temperatura:</h3>
    <p>As temperaturas 90ºF, 77ºF, 52ºF e 12ºF convertidas em graus Celsius são, respectivamente: </p>
    <?php
    function converte($f){
        $c= ($f-32)/18;
        echo round($c, 1);
    }

    echo "90ºF --> ";
    converte(90);
    echo "ºC<br>";
    echo "77ºF --> ";
    converte(77);
    echo "ºC<br>";
    echo "52ºF --> ";
    converte(52);
    echo "ºC<br>";
    echo "12ºF --> ";
    converte(12);
    echo "ºC";

    ?>
</body>
</html>
