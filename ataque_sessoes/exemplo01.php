<?php
session_start();

// Depois de verificar login/senha reinicie o id da sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id(); // exibe id encriptado