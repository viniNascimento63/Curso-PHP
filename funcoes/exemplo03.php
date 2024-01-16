<?php
function ola($texto = 'mundo', $periodo = 'bom dia!') {
    return "Olá $texto, $periodo<br>"; 
}
echo ola('', 'boa tarde!');
echo ola('Vini');
echo ola('Luna', 'boa noite!');
