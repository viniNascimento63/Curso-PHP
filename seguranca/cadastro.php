<?php
// Guarda os dados digitados no input de nome "inputEmail"
// na variável $email.
$email = $_POST['inputEmail'];

$link = 'https://www.google.com/recaptcha/api/siteverify'; // URL da api do reCaptcha
$curl_handle = curl_init($link); // Abre sessão cURL

curl_setopt($curl_handle, CURLOPT_URL, $link); // Define a URL para a qual será feita a requisição
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, 0); // Ignora se o servidor LOCAL possui certificado SSL
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, 0); // Ignora se o servidor REMOTO possui certificado SSL
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, http_build_query(array( // Essa configuração define os campos a serem enviados para a requisição.
    // chave compartilhada entre seu site e o reCAPTCHA.
    'secret' => '/*chave secreta do backend*/',
    // token de resposta do usuário fornecido pela integração reCAPTCHA do lado do cliente no seu site.
    'response' => $_POST['g-recaptcha-response'],
    // Endereço IP do usuário.
    'remoteip' => $_SERVER['REMOTE_ADDR']
)));

curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true); // define o desejo de obter uma resposta da requisição

$recaptcha = curl_exec($curl_handle); // Retorno da requisição em JSON
$recaptcha_array = json_decode($recaptcha, true); // Retorno da requisição num array

curl_close($curl_handle); // Fecha sessão cURL

// Verifica se a validação foi um sucesso
if ($recaptcha_array['success'] === true) {
    echo "E-mail " . $_POST['inputEmail'] . " validado com sucesso!";
    //echo $recaptcha;
} else {
    header("Location: exemplo04.php");
}
