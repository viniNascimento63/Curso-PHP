<?php
$pasta = 'arquivos';
$permissao = '0775'; // Nível de permissão de acesso

if (!is_dir($pasta)) mkdir($pasta, $permissao);
echo "Diretório criado com sucesso!";
?>
