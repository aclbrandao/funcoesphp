<?php

function compara($n1, $n2, $n3, $n4, $n5){
    $maior=$n1;
    if ($maior<$n2){
        $maior=$n2;
    } if ($maior<$n3){
        $maior=$n3;
    } if ($maior<$n4){
        $maior=$n4;
    } if ($maior<$n5){
        $maior=$n5;
    }
    return $maior;
}
?>
