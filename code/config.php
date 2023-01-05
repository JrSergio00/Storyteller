<?php

$host = 'localhost:3306';
$bd = 'storyteller';
$usuario = 'admin';
$senha = 'admin';

$pdo = new PDO("mysql:dbname=".$bd."; host=".$host, $usuario, $senha);

//$pdo = new PDO("mysql:dbname=storyteller; host=localhost:3306, "root", "" ");

//$sql = $pdo->query('SELECT * FROM cinefilo');
//$dados = sql->fetchAll(pdo::FETCH_ASSOC);
//echo '<pre>';
//print_r($dados);

?>