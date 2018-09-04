<?php

$db = "php7";
$host = "localhost";
$pw = "1234";
$user = "php_user";

$conn = new PDO("mysql:dbname=$db; host=$host", $user, $pw);

$stmt = $conn->prepare ("DELETE FROM tb_usuarios WHERE = :ID ");

$id = 1;


$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados excluidos OK!";
