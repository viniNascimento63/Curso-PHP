<?php
$conn = new PDO('mysql:host=localhost; dbname=db_php7', 'root', '');
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
