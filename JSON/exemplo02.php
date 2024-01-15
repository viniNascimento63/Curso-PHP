<?php
    $json = '[{"nome":"Maira","idade":19},{"nome":"Jos\u00e9","idade":32}]';
    $dado = json_decode($json, true);
    var_dump($dado);