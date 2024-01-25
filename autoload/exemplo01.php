<?php
    // A função __autoload() tornou-se defasada a partir do PHP 7.2
    
    // AVISO: Esse código funciona para arquivos no mesmo diretório
    spl_autoload_register(function($class_name) {
        include $class_name.'.php';
    });

    $carro = new DelRey();
    $carro->acelerar(80);
?>
