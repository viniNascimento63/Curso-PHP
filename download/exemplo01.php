<?php
// Link da imagem
$link = 'https://nodejs.org/static/images/logo.svg';

// Conteúdo da imagem em binário
$content = file_get_contents($link);

// Transforma a URL em um array associativo com dados do arquivo
$parse = parse_url($link);

// Recupera o nome da imagem
$base_path = basename($parse['path']);

// Abre arquivo em modo escrita+
$file = fopen($base_path, 'w+');

// Escreve no arquivo o conteúdo binário da imaem
fwrite($file, $content);

// Fecha o arquivo
fclose($file);
?>
<!-- Renderiza a imagem local -->
<img src="<?= $base_path ?>">
