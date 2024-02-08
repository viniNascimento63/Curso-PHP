<?php
require_once('config.php');

/* --- Select simples da tabela --- */
/*
$sql = new Sql();
$users = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($users);
*/

/* --- Selecionando um único usuário ---  */
/*
$goku = new Usuario();
$goku->load_by_id(3);
echo $goku;
*/

/* --- Carregando uma lista de usuários --- */
/*
$lista = Usuario::get_list();
echo json_encode($lista);
*/

/* --- Carrega uma lista de usuários através do login --- */
/*
$lista = Usuario::search('freeza');
echo json_encode($lista);
*/

/* --- Carrega um usuário se login e senha corretos --- */
/*
$user = new Usuario();
$user->login('sirigueijo', '1010');
echo $user;
*/

/* --- INSERINDO novo usuário no banco --- */
/*
$user = new Usuario('Majin-Boo', '0980');
$user->insert();
echo $user;
*/
