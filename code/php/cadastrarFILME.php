<?php
require '../config.php';

$nome = filter_input(INPUT_POST, 'nome');
$genero = filter_input(INPUT_POST, 'genero');
$duracao = filter_input(INPUT_POST, 'duracao');
$dt_lancamento = filter_input(INPUT_POST, 'dt_lancamento');
$email_cinefilo = filter_input(INPUT_POST, 'email_cinefilo');
$sinopse = filter_input(INPUT_POST, 'sinopse');

$sql = $pdo->prepare("INSERT INTO filme (nome, genero, duracao, dt_lancamento, sinopse, email_cinefilo) VALUES (:nome, :genero, :duracao, :dt_lancamento, :sinopse, :email_cinefilo)");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':genero', $genero);
$sql->bindValue(':duracao', $duracao);
$sql->bindValue(':dt_lancamento', $dt_lancamento);
$sql->bindValue(':email_cinefilo', $email_cinefilo);
$sql->bindValue(':sinopse', $sinopse);

$sql->execute();

header("Location: ../index.html");

?>