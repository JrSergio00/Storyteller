<?php
require '../config.php';

$nome = filter_input(INPUT_POST, 'nome');
$genero = filter_input(INPUT_POST, 'genero');
$duracao = filter_input(INPUT_POST, 'duracao');
$dt_lancamento = filter_input(INPUT_POST, 'dt_lancamento');
$sinopse = filter_input(INPUT_POST, 'sinopse');
$id_cinefilo = filter_input(INPUT_POST, 'id_cinefilo');

$sql = $pdo->prepare("INSERT INTO filme (nome, genero, duracao, dt_lancamento, sinopse, id_cinefilo) VALUES (:nome, :genero, :duracao, :dt_lancamento, :sinopse, :id_cinefilo)");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':genero', $genero);
$sql->bindValue(':duracao', $duracao);
$sql->bindValue(':dt_lancamento', $dt_lancamento);
$sql->bindValue(':sinopse', $sinopse);
$sql->bindValue(':id_cinefilo', $id_cinefilo);

$sql->execute();

header("Location: ../index.html");

?>