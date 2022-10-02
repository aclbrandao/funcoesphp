<?php
function cpf($n){
    $tamanho = mb_strlen($n); 
    if ($tamanho == 11){
        $p1= mb_substr($n,0,3);
        $p2= mb_substr($n,3,3);
        $p3= mb_substr($n,6,3); 
        $p4= mb_substr($n,9,2);
        echo "Seu CPF é: ".$p1.".".$p2.".".$p3."-".$p4;
    } else{
        echo "CPF inválido!";
    }
}
?>

