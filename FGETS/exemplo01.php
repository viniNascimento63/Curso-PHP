<?php
$filename = 'usuarios.csv';
// Verifica se o $filename existe
if (file_exists($filename)) {
    
    $file = fopen($filename, 'r');

    // Pega primeira linha do arquivo transformando em array
    $headers = explode(',', fgets($file));

    // Onde serão os dados do arquivo csv
    $data = array();

    // Enquanto houver linhas no arquivo
    while ($row = fgets($file)) {
        $rowData = (explode(',', $row));
        $tempRow = array();

        // Itera sobre os dados da linha
        for ($i = 0; $i < count($headers); $i++) {
            // Cria um par chave-valor
            $tempRow[$headers[$i]] = $rowData[$i];
        }

        // Adiciona o array de chave-valores dentro de $data
        array_push($data, $tempRow);
    }

    fclose($file);

    echo json_encode($data);
}
