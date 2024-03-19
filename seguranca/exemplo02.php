<?php
$id = (isset($_GET['id'])) ? $_GET['id'] : 8;
if (!is_numeric($id) || strlen($id) > 5) {
    exit("Pegamos você!");
}
$conn = mysqli_connect('localhost', 'root', '', 'DB_PHP7');
$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";
$exec = mysqli_query($conn, $sql);
while ($res = mysqli_fetch_object($exec)) {
    echo json_encode($res);
}
