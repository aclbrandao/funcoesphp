<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior número</title>
</head>
<body>
<h4>c) Escreva uma função para que receba um vetor com números inteiros e que devolva o maior número existente no vetor.  Use apenas um laço de repetição e instrução if.</h4>
<div>
  <form method="GET">
    <label for="number">Insira os números para compará-los:</label><br><br>  
    <input type="number" name="n1"><br>
    <input type="number" name="n2"><br>
    <input type="number" name="n3"><br>
    <input type="number" name="n4"><br>
    <input type="number" name="n5"><br><br>
    <input type="submit" value="enviar"><br><br><br>
  </form>
</div>

<?php
    include ("C_MaiorNumerofuncao.php");
    if (isset($_GET["n1"])){
      $n1= ($_GET["n1"]);
      $n2= ($_GET["n2"]);
      $n3= ($_GET["n3"]);
      $n4= ($_GET["n4"]);
      $n5= ($_GET["n5"]);
      $maior = compara($n1, $n2, $n3, $n4, $n5);
      echo "O Maior valor entre números inseridos é $maior";
    }
?>
</body>
</html>
