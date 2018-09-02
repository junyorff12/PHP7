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

//consulta no banco

$res = $conn->query("SELECT * FROM tb_usuarios ");

$data = array();

while ($row = $res->fetch_assoc()) {

    array_push($data, $row);

}

echo json_encode($data);