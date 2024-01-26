<?php
require_once('config.php');

use Cliente\Cadastro;

$cadastro1 = new Cadastro();
$cadastro1->setNome("Francisco Xavier");
$cadastro1->setEmail("fracis.xavier@gmail.com");
$cadastro1->setSenha("123456");
$cadastro1->registrarVenda();

echo $cadastro1;
?>
