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
    <link rel="stylesheet" type="text/css" href="listarCinefilosUSER.css" />
    <title>Storyteller - Cinéfilos</title>
  </head>
</html>
<body>
<header>
  <nav id="layout">
      <a href="../index.html" class="logo"><img src="../imagens/logo (1).png" id="logo"></a>
      <ul id="layout">
          <li><a href="../index.html"><img src="../imagens/search.png"></a></li>
          <li><a href="../index.html"><img src="../imagens/home.png"></a></li>
          <li><a href="../listadeFilmes/ListadeFilmes.php"><img src="../imagens/movie.png" id="moovie"></a></li>
          <li><a href="../listarCinefiloUSER/listarCinefilosUSER.php"><img src="../imagens/user 1.png"></a></li>
      </ul>
      <a href="http://192.168.0.185/storyteller.backend.biz"><img src="../imagens/admin.png" id="layout"></a>
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

    </article>
  </main>
</body>
