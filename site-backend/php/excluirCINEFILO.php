<?php
require '../config.php';

$id = filter_input(INPUT_GET, 'id');

if(&id){
    $sql = $pdo->prepare("DELETE FROM cinefilo WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();
}

header("Location: ../listarlistarCinefilos.php")

?>