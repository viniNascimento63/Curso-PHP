<?php
$dir1 = 'folder_1';
$dir2 = 'folder_2';

// Cria os diretórios se não existirem
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = 'README.md';

// Verifica se o nome do arquivo não existe
if (!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)) {
    $file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, 'w+');
    fwrite($file, date('d-m-Y H:i'));
    fclose($file);
}

rename(
    $dir1.DIRECTORY_SEPARATOR.$filename, // Origem
    $dir2.DIRECTORY_SEPARATOR.$filename  // Destino
)

?>
