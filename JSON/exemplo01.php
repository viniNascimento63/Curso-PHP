<?php

    $pessoas = array();
    array_push($pessoas, array(
        'nome' => 'Maira',
        'idade' => 19
    ));

    array_push($pessoas, array(
        'nome' => 'José',
        'idade' => 32
    ));

    echo json_encode($pessoas);