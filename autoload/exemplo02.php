<?php
    /**
     * A função abaixo carrega todos os arquivos necessários:
     * classes abstratas, classes filhas e interfaces.
     */
    spl_autoload_register(function($class_name) {

        // Verifica se existe um arquivo no diretório atual e carrega-o
        if (file_exists($class_name.'.php') === true) {
            require_once ($class_name.'.php');
        }
        
        // Verifica se existe o arquivo necessário no diretório class/ e carrega-o
        if (file_exists("class".DIRECTORY_SEPARATOR.$class_name.".php") === true) {
            require_once ("class".DIRECTORY_SEPARATOR.$class_name.".php");
        }
        
        // Verifica se existe o arquivo necessário no diretório abstract/ e carrega-o
        if (file_exists("abstract".DIRECTORY_SEPARATOR.$class_name.".php") === true) {
            require_once ("abstract".DIRECTORY_SEPARATOR.$class_name.".php");
        }
        
        // Verifica se existe o arquivo necessário no diretório interface/ e carrega-o
        if (file_exists("interface".DIRECTORY_SEPARATOR.$class_name.".php") === true) {
            require_once ("interface".DIRECTORY_SEPARATOR.$class_name.".php");
        }
    });
    
    $carro = new DelRey();
    $carro->acelerar(80);
?>
