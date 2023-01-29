<?php
require '../config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM cinefilo");
if($sql->rowCount() > 0 ){
  $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../layout/layout.css" />
    <link rel="stylesheet" type="text/css" href="listarCinefilos.css" />
    <title>Storyteller - Cinéfilos</title>
  </head>
</html>
<body>
  <header>
    <nav id="layout">
        <a href="http://192.168.0.185/storyteller.com" class="logo"><img src="../imagens/logo (1).png" id="logo"></a>
        <ul id="layout">
            <li><a href="../index.html"><img src="../imagens/home.png"></a></li>
            <li><a href="../listarfilmesadmin/listarfilmesadmin.php"><img src="../imagens/movie.png" id="moovie"></a></li>
            <li><a href="../listarCinefilos/listarCinefilos.php"><img src="../imagens/user 1.png"></a></li>
        </ul>
        <a href="#"><img src="../imagens/search.png"></a>
    </nav>
  </header>

  <main>
    <h1>Lista de cinéfilos do Storyteller</h1>

    <article>
        <div>
          <h2>E-mail</h2>
          <ul class="listcinefilos">
            <?php foreach($lista as $usuario): ?>
              <li><?=$usuario['email'];?></li>
            <?php endforeach; ?>
          </ul>
        </div>  

        <div>
          <h2>Nome</h2>
          <ul class="listcinefilos">
            <?php foreach($lista as $usuario): ?>
              <li><?=$usuario['nome'];?></li>
            <?php endforeach; ?>
          </ul>
      </div>

      <div>
        <h2>Ações</h2>
        <ul class="listcinefilos">
          <?php foreach($lista as $usuario): ?>
            <li><a href="../edcinefilo/edcinefilo.php?id=<?=$usuario['id'];?>">[editar]</a> <a href="../php/excluirCINEFILO.php?id=<?=$usuario['id'];?>">[excluir]</a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </article>

    <a href="../adcinefolo/adcinefolo.html" class="button">Adicionar cinéfilo</a>
    <a href="../adfilme/adfilme.html" class="button">Adicionar indicação</a>

  </main>
  
</body>
