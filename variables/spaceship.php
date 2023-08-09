<?php

$value1 = 50;

$value2 = 35;

var_dump($a <=> $b);

$valueNull = NULL;

echo $valueNull ?? $value1 ?? $value2;

?>