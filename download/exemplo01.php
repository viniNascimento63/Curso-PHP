<?php
// Link da imagem
$link = 'https://nodejs.org/static/images/logo.svg';

// Conteúdo da imagem em binário
$content = file_get_contents($link);

//
$parse = parse_url($link);

//
$base_path = basename($parse['path']);

//
$file = fopen($base_path, 'w+');

//
fwrite($file, $content);

//
fclose($file);
?>

<img src="<?= $base_path ?>">