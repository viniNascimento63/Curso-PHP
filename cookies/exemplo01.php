<?php
// Cria um cookie para ser enviado
setcookie('COOKIE_NAME', 
    json_encode(
        array (
            'Empresa'=>'Void Company'
        ),
        true
    ),
    time() + 3600 // A validade do cookie é de 1 hora (3600s)
);
