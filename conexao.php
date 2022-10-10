<?php 

$usuario = 'root';
$senha = '';
$database = 'paesleme';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Erro ao validar informações do banco de dados" . $mysqli->error);
} 