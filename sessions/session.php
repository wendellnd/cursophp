<?php 

session_start();

echo $_SESSION["nome"] . "<br>";

echo session_id();

session_unset();

?>