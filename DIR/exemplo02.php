<?php
// Retorna array de diretórios e/ou arquivos
$images = scandir('images');

$data = array();

foreach ($images as $img) {
    // Verifica se $img não é diretório atual ou diretório pai
    if (!in_array($img, array('.', '..'))) {
        $filename = 'images'.DIRECTORY_SEPARATOR.$img;
    
        // Retorna informações sobre caminho especificado
        $info = pathinfo($filename);

        // Função retorna o tamanho do arquivo em bytes
        $info['size'] = filesize($filename);
        // Função retorna data de modificação do arquivo
        $info['modified'] = date('d/m/Y H:i', filemtime($filename));
        // Define a URL do arquivo
        $info['url'] = 'http://localhost/Curso-PHP/DIR/'.str_replace('\\', '/', $filename);

        // Define valores para o array $data
        array_push($data, $info);
    }
}

echo json_encode($data);
