<?php
require '../config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$genero = filter_input(INPUT_POST, 'genero');
$duracao = filter_input(INPUT_POST, 'duracao');
$dt_lancamento = filter_input(INPUT_POST, 'dt_lancamento');
$sinopse = filter_input(INPUT_POST, 'sinopse');
$id_cinefilo = filter_input(INPUT_POST, 'id_cinefilo');

if($id_cinefilo && $nome && $genero && $duracao && $dt_lancamento && $sinopse ){
    $sql = $pdo->prepare("UPDATE filme SET nome = :nome, genero = :genero, duracao = :duracao, dt_lancamento = :dt_lancamento, sinopse = :sinopse, id_cinefilo = :id_cinefilo WHERE id = :id");

    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':genero', $genero);
    $sql->bindValue(':duracao', $duracao);
    $sql->bindValue(':dt_lancamento', $dt_lancamento);
    $sql->bindValue(':sinopse', $sinopse);
    $sql->bindValue(':id_cinefilo', $id_cinefilo);
    $sql->execute();

    header("Location: ../index.html");
    exit;
}