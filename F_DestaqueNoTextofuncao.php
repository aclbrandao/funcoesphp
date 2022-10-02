    <?php
    $texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
    Etiam eget ligula eu lectus lobortis condimentum. <br>
    Aliquam nonummy auctor massa. <br>
    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br>
    Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus.<br> 
    Nam mattis, felis ut adipiscing.";
        
    if (isset($_POST['botao'])){
        $b = array($_POST['busca']);
        foreach ($b as $busca){
            echo "A palavra buscada foi ".$busca.".<br><br>";
        }
    }
    
    function buscaTexto($t, $s){
        $t = str_replace($s, '<strong><font color="red">'.$s.'</font></strong>', $t);
         echo $t;
     }

    buscaTexto($texto, $busca);
    ?>
