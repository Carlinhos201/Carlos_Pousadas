<?php


$dsn  = 'mysql:host=127.0.0.1;dbname=carlosp';


$usuario = 'root';
$senha = ''; 


$params = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];


$pdo = new PDO($dsn, $usuario, $senha, $params);