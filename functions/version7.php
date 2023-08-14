<?php 

function sum(int ...$values): string {
    return array_sum($values);
}

var_dump(sum(1,2,3,4));

?>