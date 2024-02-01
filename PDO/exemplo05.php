<?php
$conn = new PDO('mysql:host=localhost; dbname=db_php7', 'root', '');
$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE id_usuario=:ID');

$id = 5;

$stmt->bindParam(':ID', $id);

$stmt->execute();

echo 'Dados excluídos com sucesso!';
?>
