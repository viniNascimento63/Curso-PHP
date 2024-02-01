<?php
$conn = new PDO('mysql:host=localhost; dbname=db_php7', 'root', '');
$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE id_usuario=?');

$conn->beginTransaction();

$id = 4;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();

echo 'Dados excluídos com sucesso!';
?>
