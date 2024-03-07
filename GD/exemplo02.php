<?php
// Cria uma imagem a partir de outra
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 110, 110, 110);

// Escrevendo na imagem
imagestring($image, 5, 450, 150, 'CERTIFICADO', $titleColor);
imagestring($image, 5, 435, 350, 'Calabreso Alves', $titleColor);
imagestring($image, 3, 415, 370, mb_convert_encoding('Concluído em '.date('d/M/Y'), 'ISO-8859-2'), $titleColor);

header('Content-type: image/jpeg');
// Gerando imgem e salvando
imagejpeg($image, 'certificado'.date('Y-m-d').'.jpg', 80);
// Tirando da memório
imagedestroy($image);
