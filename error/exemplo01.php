<?php
// Função responsável por capturar erros e
// devolvê-los num json para o front-end.
function trataErro($code, $message, $file, $line) {

    echo json_encode(
        array(
            "code" => $code,
            "message" => $message,
            "file" => $file,
            "line" => $line
        )
    );
}

// Define uma função de callback quando ocorrer erros.
set_error_handler("trataErro");

// Erro gerado (E_NOTICE, E_WARNING)
echo $variavel_nao_definida;
//include "arquivo_inexistente.php";
?>
