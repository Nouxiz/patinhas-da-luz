<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "patinhas_da_luz";

$conn = new mysqli( $host, $user, $pass, $db);

$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}