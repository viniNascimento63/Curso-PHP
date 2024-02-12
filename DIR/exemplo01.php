<?php

$filename = 'images';

// Verifica se o diretório não existe
if (!is_dir($filename)) {
    // Cria um diretório
    mkdir($filename);
    echo "Diretório <stron><em>$filename</em></strong> criado com sucesso!";
} else {
    echo "O diretório <strong><em>$filename</em></strong> já existe!";
}