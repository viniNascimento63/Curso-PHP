<?php
    // Tipos básicos 
    $nome = 'Bob Esponja';
    $site = 'www.site.com.br';
    $ano = 2023;
    $salario = 5890.70;
    $bloquedo = false;

    // Tipos compostos
    $frutas = array('banana', 'maçã', 'melão');
    echo $frutas[1];  

    $nascimento = new DateTime(); // Objeto
    
    // Tipos especiais
    $arquivo = fopen('exemplo03.php', 'r');
    var_dump($arquivo); // tipo resource

    $nulo = NULL; // tipo null
