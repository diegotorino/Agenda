<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // erro na conexão
    echo "Erro: $error";
}