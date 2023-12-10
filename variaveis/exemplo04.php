<?php
    echo 'Pegando variáveis via $_GET';
    echo '<br/><br/>';
    
    echo 'Variável a: ';
    $num = (int)$_GET['a']; // Cast para int
    var_dump($num); 
    echo '<br/><br/>';

    echo 'Variável b: ';
    $num2 = (float)$_GET['b']; // Cast para float
    var_dump($num2);

    echo '<br/><br/>';
    $ip = $_SERVER['REMOTE_ADDR']; // Captando o ip do usuário
    echo $ip;

    echo '<br/><br/>';
    $script = $_SERVER['SCRIPT_NAME']; // Captando o endereço onde do arquivo que está rodando
    echo $script;