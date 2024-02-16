<?php
spl_autoload_register(function($class_name) {
    $dir_class = 'class';
    $file_name = $dir_class.DIRECTORY_SEPARATOR.$class_name.".php";

    if (file_exists($file_name)) {
        require_once($file_name);
    }
    
});