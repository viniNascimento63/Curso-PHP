<?php
// Envia uma response http de contúdo imagem
header("Content-Type: image/png");

// Variáve resource da imagem
$image = imagecreate(256, 256);

$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// Desenha uma string
imagestring($image, 5, 60, 120, "Hello World!", $black);

// Gera uma imagem png
imagepng($image);

// Destrói a variável resource
imagedestroy($image);
?>
