<?php

$db = "php7";
$host = "localhost";
$pw = "1234";
$user = "php_user";

$conn = new PDO("mysql:dbname=$db; host=$host", $user, $pw);

$conn->beginTransaction();

$stmt = $conn->prepare("
	UPDATE tb_usuarios SET deslogin = ?, dessenha = ? WHERE idusuario = ?");

$lg = "Antonio jr";
$pw = "ff1212";
$id = 2;


$stmt->execute(array($lg, $pw, $id));

//$conn->rollback();
$conn->commit();

echo "Dados alterados OK!";
