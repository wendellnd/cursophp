<?php 

$conn = new PDO("mysql:dbname=cursophp;host=localhost", "root", "futebol");

$conn->beginTransaction();

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:USER,:PASSWORD)");

$user = "wends";
$pass = "12345678";

$stmt->bindParam(":USER", $user);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

$conn->rollback();

?>