<?php

    $nome = 'Lucas';

    function teste() {
        global $nome; // Utilizando a variável $nome global
        echo $nome;
    }

    teste();