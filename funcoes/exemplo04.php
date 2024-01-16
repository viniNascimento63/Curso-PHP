<?php

function ola($frase = 'mundo', $periodo = 'bom dia!') {
    
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola('Vinícius', 'boa noite!'));
?>
