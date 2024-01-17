<?php

$pessoa = array(
    'nome' => 'Vinícius',
    'idade' => 22
);

foreach ($pessoa as &$value) {
    
    echo $value.'<br>';

    if (gettype($value) === 'integer') $value += 1;

}

print_r($pessoa);
