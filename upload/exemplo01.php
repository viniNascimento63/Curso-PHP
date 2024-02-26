<!-- Permite enviar arquivos para um servidor -->
<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // $file armazena os dados do arquivo enviado
    $file = $_FILES['fileUpload'];
}

// Dispara uma exceção caso $file a chave error
if ($file['error']) {
    throw new Exception('Error: ' . $file['error']);
}

// Diretótio do servidor fictício
$dirUploads = 'uploads';

// Verifica se a pasta não existe
if (!is_dir($dirUploads)) {
    // Cria pasta $dirUploads
    mkdir($dirUploads);
}

// Move o arquivo que subiu para $dirUploas
if (move_uploaded_file($file['tmp_name'], $dirUploads .
    DIRECTORY_SEPARATOR . $file['name'])) {

    echo 'Upload de arquivo(s) realizado com sucesso!';
} else {
    throw new Exception('Não foi possível realizar o upload do(s) arquivo(s)!');
}
?>