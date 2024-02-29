<?php
$cep = '83324190';

// Retorna um json com o endereço
$link_web_service = "https://viacep.com.br/ws/$cep/json/";

// Sessão cURL
$curl_handle = curl_init($link_web_service);

/* Estabelece algumas opções para a sessão cURL */
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, 0);

// Executa a sessão curl
$response = curl_exec($curl_handle);

// Fecha uma sessão curl
curl_close($curl_handle);

// Transforma em array os valores retornados
$data = json_decode($response, true);

print_r($data);
