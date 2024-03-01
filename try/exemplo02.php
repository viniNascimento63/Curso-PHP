<?php
/* SIMULAÇÃO de erro em runtime */

function trataNome($name) {
    if (!$name) {
        throw new Exception("<strong>Erro:</strong> Nenhum nome foi informado!", 1);        
    }
    echo "Nome: $name<br />";
}

// Trata a exceção caso o nome seja vazio ou inválido
try {
    trataNome("Lagartixo");
    trataNome('');
} catch (Exception $e) {
    echo $e->getMessage();
} finally { // Mostra 'Fim' independentemente de erros ou não
    echo '<br /><br />Fim.';
}
?>
