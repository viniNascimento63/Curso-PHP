<?php
$conn = new PDO('sqlsrv:server=localhost\SQLEXPRESS;ConnectionPooling=0; database=dbphp8', 'sa', 'root');
$stmt = $conn->prepare('SELECT * FROM tb_usuarios ORDER BY desc_login');
$stmt->execute();
$result = $stmt->fetchAll( PDO::FETCH_ASSOC );

foreach ($result as $row) {
    foreach ($row as $coluna => $valor) {
        // 
        echo "<strong>$coluna:</strong> $valor<br>";
    }
    echo '==========================================<br><br>';
}
json_encode($result);
?>
