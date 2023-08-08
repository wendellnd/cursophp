<?php

$name = "Wends";

// Remove the variable value from memory
unset($name);

// if has a value
if (isset($name)) {
    echo $name;
} else {
    $name = "Wends ";
    echo $name;
}

$lastName = "Dourado";

$fullName = $name . " " . $lastName;

echo $fullName

?>