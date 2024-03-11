<?php
header('Content-type: image/jpeg');

// Imagem
$file = 'wallpaper.jpg';

// Largura e altura da imagem original
list($old_width, $old_height) = getimagesize($file);

// Novas largura e altura para thumb
$new_width = $old_width / 5;
$new_height = $old_height / 5;

// thumbnail com as novas dimensões
$new_image = imagecreatetruecolor($new_width, $new_height);

// Cria imagem de fundo com base na original
$old_image = imagecreatefromjpeg($file);

// Mesclando as imagens new e old
imagecopyresampled(
    $new_image,
    $old_image,
    0, // Coordenada eixo X imagem destino
    0, // Coordenada eixo Y imagem destino
    0, // Coordenada eixo X imagem source
    0, // Coordenada eixo Y imagem source
    $new_width,
    $new_height,
    $old_width,
    $old_height
);

// Gerando nova imagem
imagejpeg($new_image);

// Limpando variávies da memória
imagedestroy($new_image);
imagedestroy($old_image);
