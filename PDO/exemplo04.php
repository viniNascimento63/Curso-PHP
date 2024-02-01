<?php
$conn = new PDO('mysql:host=localhost; dbname=db_php7', 'root', '');
$stmt = $conn->prepare('UPDATE tb_usuarios SET desc_login=:LOGIN, desc_senha=:PASS WHERE id_usuario=:ID');

$login = 'Freeza';
$pass = '1551';
$id = 2;

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASS', $pass);
$stmt->bindParam(':ID', $id);

$stmt->execute();

echo 'Dados atualizados com sucesso!';
?>
