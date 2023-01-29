<?php
require '../config.php';

$id = filter_input(INPUT_GET, 'id');
$filme= [];

if($id){
    $sql = $pdo->prepare("SELECT * FROM filme WHERE id = :id"); 
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