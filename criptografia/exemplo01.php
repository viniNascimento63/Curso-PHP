<?php
/* --- ENCRIPTAÇÃO DOS DADOS --- */

// Constantes de valor "senha" cuja string será convertida em 16 bits
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
    'nome' => 'Bob-esponja'
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC', // Algoritmo de encriptação
    SECRET, // chave
    0, // apenas encriptação sem retorno
    SECRET_IV // chave iv
);
echo "Dados encriptados: $openssl <br>";

/* --- DECRIPTAÇÃO DOS DADOS --- */

$res = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
echo "Dados decriptados: ";
print_r(json_decode($res, true));

/*
 * MÉTODOS DE ENCRIPTAÇÃO
 *
$metodos = openssl_get_cipher_methods(true);
echo json_encode($metodos);
*/