<?php
require '../config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM filme WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();
}

header("Location: ../listarfilmesadmin/listarfilmesadmin.php")

?>