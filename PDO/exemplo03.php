<?php
$conn = new PDO('mysql:host=localhost; dbname=db_php7', 'root', '');
$stmt = $conn->prepare('INSERT INTO tb_usuarios (desc_login, desc_senha) VALUES (:LOGIN, :PASS)');

$login = 'Bob-Esponja';
$pass = '1111';

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASS', $pass);

$stmt->execute();

echo 'Dados inseridos com sucesso!';
?>
