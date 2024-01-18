<?php

// $ts = strtotime('2001-03-06');
// $ts = strtotime('now');
$ts = strtotime('+1 week');

echo date('l: d/m/Y', $ts);
?>
