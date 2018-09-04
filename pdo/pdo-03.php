<?php

$db = "php7";
$host = "localhost";
$pw = "1234";
$user = "php_user";

$conn = new PDO("mysql:dbname=$db; host=$host", $user, $pw);

$stmt = $conn->prepare("
	UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PW 
	WHERE idusuario = :ID ");

$lg = "jrff13";
$pw = "1234hnjh";
$id = 2;

$stmt->bindParam(":LOGIN", $lg);
$stmt->bindParam(":PW", $pw);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados alterados OK!";
