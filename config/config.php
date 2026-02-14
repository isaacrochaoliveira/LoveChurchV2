<?php 
$url_base = "http://localhost/projects/LoveChurchV2/";
$nome_fantasia = "LoveChurch";
$version = 'Isaac Rocha | v2.0';

$database = "lovechurch_v2";
$password = "";
$user = "root";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $user , $password);
} catch (PDOException) {
    echo "Erro ao se conectar ao Banco!";
}
