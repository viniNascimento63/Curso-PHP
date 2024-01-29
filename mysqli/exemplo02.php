<?php
// Realiza conexão com o BD
$conn = new mysqli('localhost', 'root', '', 'DB_PHP7');

// Verifica se há erro(s) de conexão e exibe-o(s)
if ($conn->connect_error) {
    echo "Error: $conn->connect_error";
}

/* --- REALIZANDO CONSULTAS NO BD --- */
$result = $conn->query('SELECT * FROM tb_usuarios ORDER BY desc_login');

$data = array();

/* fetch_array(), recebe a próxima linha de resultado
 * como um array associativo (chave/valor), numérico ou ambos.
*/
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    array_push($data, $row);
    // var_dump($row);
}

echo json_encode($data);
?>
