<?php
    spl_autoload_register(function ($class_name) {
        $dirClass = 'class';
        // class/class_name.php
        $filename = $dirClass.DIRECTORY_SEPARATOR.$class_name.'.php';

        if (file_exists($filename)) {
            require_once ($filename);
        }
    });
?>
