<?php
require_once('config.php');

/*
 * Cria objeto e seleciona valores da tabela
 * através da coluna desc_login.
*/ 
$sql = new Sql();
$users = $sql->select('SELECT * FROM tb_usuarios ORDER BY desc_login');

// print_r($users);

$headers = array();
// Captura os nomes das colunas e joga em $headers
foreach ($users[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

/*
 * Modo w+ abre e/ou cria o arquivo
 * para leitura e escrita, colocando
 * o cursor no início do arquivo e
 * truncando o conteúdo que já existia. 
 */
$file = fopen('usuarios.csv', 'w+');

fwrite($file, implode(', ', $headers)."\r\n");

// Primeiro foreach percorre as linhas da tabela
foreach ($users as $row) {
    // Array que receberá os valores de uma linha
    $data = array();

    // Segundo foreach percorre os valores em cada linha
    foreach ($row as $value) {
        array_push($data, $value);
    }

    // Escreve no arquivo cada linha, separada por vírgula
    fwrite($file, implode(', ', $data)."\r\n");
}

// Separa o nome de cada coluna com uma vírgula
//echo implode(', ', $headers);

fclose($file);
