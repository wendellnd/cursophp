<?php 
$conn = new mysqli("localhost", "root", "futebol", "cursophp");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$login = "user";
$pass = "123456";

$stmt->bind_param("ss", $login, $pass);

$stmt->execute();

?>