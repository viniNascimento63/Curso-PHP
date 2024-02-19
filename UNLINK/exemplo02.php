<?php
// Cria um diretório se 'images' não existir
if (!is_dir('images')) mkdir('images');

// Percorre o diretório images
foreach (scandir('images') as $item) {
    // Verifica se $item não está nos diretórios '.' e '..'
    if (!in_array($item, array('.', '..'))) {
        echo "Arquivo $item removido do diretório images/<br/>";

        // Remove o arquivo dentro de images
        unlink('images/'.$item);
    }
}
