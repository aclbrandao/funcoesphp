<?php
if (isset($_GET["n1"])){
    $n1= ($_GET["n1"]);
    $n2= ($_GET["n2"]);
    $n3= ($_GET["n3"]);
    $n4= ($_GET["n4"]);
    $n5= ($_GET["n5"]);
    $cont=1;
    
    $vetorNumero= array($n1, $n2, $n3, $n4, $n5);
    
    function soma($s){
        $soma=0;
            foreach ($s as $x){
                $soma+= $x;
            }        
        }
        echo $soma;


    soma($vetorNumero);
  }

?>
