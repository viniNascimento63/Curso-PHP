<?php
// Cria uma imagem a partir de outra
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 110, 110, 110);

// Escrevendo na imagem
imagettftext(
    $image,
    32,
    0,
    325,
    170,
    $titleColor,
    'fonts' . DIRECTORY_SEPARATOR . 'Bevan' . DIRECTORY_SEPARATOR . 'Bevan-Regular.ttf',
    'CERTIFICADO'
);
imagettftext(
    $image,
    32,
    0,
    340,
    370,
    $titleColor,
    'fonts' . DIRECTORY_SEPARATOR . 'Playball' . DIRECTORY_SEPARATOR . 'Playball-Regular.ttf',
    'Calabreso da Silva'
);

imagestring(
    $image,
    3,
    415,
    390,
    mb_convert_encoding('Concluído em ' . date('d/M/Y'), 'ISO-8859-2'),
    $titleColor
);

header('Content-type: image/jpeg');
// Gerando imgem e salvando
imagejpeg($image);
// Tirando da memório
imagedestroy($image);
