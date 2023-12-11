<?php

    $a = 35;
    $b = 62;

    var_dump($a > $b); // Maior que
    var_dump($a < $b); // Menor que
    var_dump($a >= $b); // Maior ou igual que
    var_dump($a <= $b); // Menor ou igual que
    var_dump($a == $b); // Valor igual
    
    $a = 62.0;
    
    var_dump($a == $b);
    var_dump($a === $b); // Valor e tipo iguais
    
    var_dump($a != $b); // Valor diferente
    var_dump($a !== $b); // Valor e tipo diferentes
