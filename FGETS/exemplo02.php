<?php
$filename = 'ficticia2.png';
// Transforma string binária para string em base64
$base64 = base64_encode(file_get_contents($filename));

// Em formato estático
// echo "data:image/png;base64,".$base64;

// Cria um objeto finfo retornando o mime type
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

// var_dump($fileinfo);

// Guarda informações do arquivo em $mimetype
$mimetype = $fileinfo->file($filename);

$base64_encoded = "data:$mimetype;base64,".$base64;
?>
<h1>Imagem base64</h1>
<img src="<?=$base64_encoded?>">
<p>Imagem em base64 renderizada pelo navegador</p>
