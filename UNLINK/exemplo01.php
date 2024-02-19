<?php
$file = fopen('teste.txt', 'w+');

unlink('teste.txt');

fclose($file);

echo 'Arquivo removido com sucesso!';
