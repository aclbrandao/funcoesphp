<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor Carregado e invertido</title>
</head>
<body>
    <h4>O vetor carregado foi:</h4>
    <?php
    $palavras=array($_GET["p1"],$_GET["p2"],$_GET["p3"],$_GET["p4"]);
    $reverse=(array_reverse($palavras));

    function impressaoDeVetor($x){
        foreach($x as $y){
            echo $y." ";
        }          
    }
    
    impressaoDeVetor($palavras);
    echo "<br><br>";

    echo "<h4>Vetor invertido:</h4>";
    impressaoDeVetor($reverse);

    ?>   
</body>
</html>
