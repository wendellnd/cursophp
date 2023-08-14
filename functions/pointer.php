<?php

$value = 10;

function changeValue(&$value) {
    $value += 50;

    return $value;
}

echo changeValue($value);

?>