<?php
// Realiza conexão com o BD
$conn = new mysqli('localhost', 'root', '', 'DB_PHP7');

// Verifica se há erro(s) de conexão e exibe-o(s)
if ($conn->connect_error) {
    echo "Error: $conn->connect_error";
}

/* --- INSERINDO DADOS NO BD */
// stmt = statment
$stmt = $conn->prepare('INSERT INTO tb_usuarios (desc_login, desc_senha) VALUES (?, ?)');

$login = 'vini';
$pass = '12345';

$stmt->bind_param('ss', $login, $pass);
$stmt->execute();

$login = 'root';
$pass = 'toor';
$stmt->execute();
?>
