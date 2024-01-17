<?php

function soma(int ...$valores):string {
    return array_sum($valores);
}

echo var_dump(soma(2, 4, 6));

?>
