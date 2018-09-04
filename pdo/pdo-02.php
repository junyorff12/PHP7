<?php

$db = "php7";
$host = "localhost";
$pw = "1234";
$user = "php_user";

$conn = new PDO("mysql:dbname=$db; host=$host", $user, $pw);

$stmt = $conn->prepare ("
	INSERT INTO tb_usuarios (deslogin, dessenha) 
	VALUES (:LOGIN, :PW) ");

$lg = "jrff12";
$pw = "4321";

$stmt->bindParam(":LOGIN", $lg);
$stmt->bindParam(":PW", $pw);

$stmt->execute();

echo "Executado OK!";
