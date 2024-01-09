<?php
    $frase = 'A repetição é mãe da retenção.';
    var_dump($q = strpos($frase, 'p')); // Retorna o índice da primeira substring encontrada
    var_dump(strpos($frase, 'r', 3)); // Retorna o índice da primeira substring encontrada a partir do índice 3
    var_dump(substr($frase, 0, $q)); // Retorna a substring entre 0 e $q
    var_dump(substr($frase, $q)); // Retorna a substring entre $q e o resto da string