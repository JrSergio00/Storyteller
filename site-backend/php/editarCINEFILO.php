<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');
$cinefilo = [];

if($id){
    $sql = $pdo->prepare("SELECT * FROM cinefilo WHERE id = :id"); //pdo é PHP DATA OBJECT (ter acesso ao banco)
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $cinefilo = $sql->fetch(PDO::FETCH_ASSOC);

    }else{
        header("Location: ../index.html");
        exit;
    }
}else{
    header("Location: ../index.html");


}   

?>

