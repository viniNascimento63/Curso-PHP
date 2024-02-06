<?php
require_once('config.php');

/*
 * Select simples da tabela

$sql = new Sql();

$users = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($users);

*/

$goku = new Usuario();
$goku->load_by_id(3);
echo $goku;