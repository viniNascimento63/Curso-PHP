<?php
session_id('25v6gma1t6sk3mo8o48vt75g2u');
require_once('config.php');
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
