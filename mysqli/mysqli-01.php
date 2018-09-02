<?php
//conexao com o banco

$user = "php_user";
$db = "php7";
$pass = "1234";
$host = "127.0.0.1";

$conn = new mysqli($host, $user, $pass, $db);

//testa de d erro

if ($conn->connect_error) {

    echo "Erro ". $conn->connect_error;
}; 

//insert no banco

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

//informa os dados que seram passados no valus(?,?)

$stmt->bind_param("ss", $login, $senha); //bind_Param precisa ser passado por referencia

$login = "user";

$senha = "12345";

$stmt->execute();

$login = "user2";

$senha = "54321";

$stmt->execute();
