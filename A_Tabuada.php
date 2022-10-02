<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício sobre funções (parte 1)</title>
</head>
<body>
  <h3>a. escrever a tabuada de um número passado por parâmetro.</h3>
  <?php
  
  function tabuada($n){
    for ($x=0;$x<=10;$x++){
      $resultado= $x*$n;
      echo "$x x $n = $resultado<br>";
    }
  }
  tabuada("2");
  ?>
</body>
</html>
