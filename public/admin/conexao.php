<?php

$host = 'localhost'; //Endereço do servidor local ou remoto
$dbname = 'db_ideiatech'; //Nome do banco de dados
$username = 'root'; //Nome do usuário do banco de dados
$password = ''; //Senha do banco de dados

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
    echo 'Erro de conexão: ' . $e->getMessage();
}
?>