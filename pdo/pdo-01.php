<?php

$db = "php7";
$host = "localhost";
$user = "php_user";
$pw = "1234";

$conn = new PDO("mysql:dbname=$db; host=$host", $user, $pw);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$res = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($res as $row) {

	foreach ($row as $key => $value) {
		
		echo "<strong>". $key . ": </strong>" . $value . "<br>";
	}

	echo str_repeat("-=", 60) . "<br>";
	
}