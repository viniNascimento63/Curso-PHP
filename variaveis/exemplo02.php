<?php
    $ano = null;
    $nomeCompleto = 'Vinícius Nascimento';

    // Exemplo de comentário de linha no PHP

    echo $ano;
    echo $nomeCompleto;
    echo '<br/>';
    
    $ano = 2001;
    echo $ano;
    unset($ano);

    // Concatenação em PHP
    $sobrenome = 'Carvalho';
    echo $nomeCompleto . ' ' . $sobrenome;

    exit;

    if (isset($ano)) {
        echo 'A variável $ano existe';
    } else {
        echo 'A variável $ano não existe';
    }
    //echo($ano);
?>