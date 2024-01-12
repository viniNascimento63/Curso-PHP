<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Enviar">
</form>    

<?php
    if (isset($_GET)) {
        foreach ($_GET as $key => $value) {
            echo "Campo de $key: $value <br>";
            echo '<hr>';
        }
    }
?>