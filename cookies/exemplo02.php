<?php 
// Verifica se existe o cookie
if (isset($_COOKIE['COOKIE_NAME'])) {
    $json_res = json_decode($_COOKIE['COOKIE_NAME'], true);
    echo "<strong>Nome da empresa:</strong> ".$json_res['Empresa'];
}
