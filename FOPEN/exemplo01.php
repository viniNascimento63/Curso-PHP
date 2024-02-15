<?php
/* 
 * Abre o arquivo em modo de leitura
 * e escrita posicionando o cursor no
 * final do arquivo (modo a+).
*/
$file = fopen('log.txt', 'a+');

// Escreve no arquivo
fwrite($file, date('d/m/Y H:i')."\r\n");

// Fecha o arquivo
fclose($file);

echo 'Arquivo criado com sucesso!';