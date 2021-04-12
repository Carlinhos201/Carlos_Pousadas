<?php

require 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$numero_cel = $_POST['numero_cel'];

$sql = 'insert into contatos (nome, email, numero_cel) values (:nome, :email, :numero_cel)';

$comando = $pdo->prepare($sql);


// usando o superglobal $_POST
$comando->execute($_POST);

// redirecionar para a página inicial
header('Location: index.php');
