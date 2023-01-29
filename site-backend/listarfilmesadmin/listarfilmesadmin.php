<?php
require '../config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM filme");
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
    <link rel="stylesheet" type="text/css" href="listarfilmesadmin.css" />
    <title>Storyteller - Filmes</title>
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
    <h1>Lista de filmes indicados</h1>

    <article>

      <div>
        <h2>Nome</h2>
        <ul class="listcinefilos">
            <?php foreach($lista as $filme): ?>

            <li><?=$filme['nome'];?></li>

            <?php endforeach; ?>
        </ul>
      </div>

            <div>
        <h2>Ações</h2>
        <ul class="listcinefilos">
          <?php foreach($lista as $usuario): ?>
            <li><a href="../edfilme/edfilme.php?id=<?=$usuario['id'];?>">[editar]</a> <a href="../php/excluirCINEFILO.php?id=<?=$usuario['id'];?>">[excluir]</a></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </article>
  </main>
</body>
