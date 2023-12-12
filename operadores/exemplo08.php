<?php
    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; // "E" lógico = &&
    var_dump($resultado);

    $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // "OU" lógico = ||
    var_dump($resultado);
    
    $resultado = !((10 + 3) / 2 > 5 && 10 + 5 < 3); // "NÃO" lógico = !
    var_dump($resultado);

