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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../layout/layout.css">
    <link rel="stylesheet" type="text/css" href="ListadeFilmes.css">
    <title>Storyteller - filmes</title>
  </head>

  <body>
    <header>
      <nav id="layout">
          <a href="../index.html" class="logo"><img src="../imagens/logo (1).png" id="logo"></a>
          <ul id="layout">
              <li><a href="../index.html"><img src="../imagens/search.png"></a></li>
              <li><a href="../index.html"><img src="../imagens/home.png"></a></li>
              <li><a href="../listadeFilmes/ListadeFilmes.html"><img src="../imagens/movie.png" id="moovie"></a></li>
              <li><a href="../listarCinefiloUSER/listarCinefilosUSER.php"><img src="../imagens/user 1.png"></a></li>
          </ul>
          <a href="../listarCinefilos/listarCinefilos.php"><img src="../imagens/admin.png" id="layout"></a>
      </nav>
    </header>

    <main>
      <h1> Lista de filmes indicados</h1>

          <?php foreach($lista as $filme): ?>

            <div>
              <h2><?=$filme['nome'];?></h2>
              <p><?=$filme['sinopse'];?></p>
              <br>
              <p><?=$filme['genero'];?></p>
              <p><?=$filme['duracao'];?></p>
              <p><?=$filme['dt_lancamento'];?></p>
            </div>
          <?php endforeach; ?>

      <div>
        <h2>O Homem do Norte</h2>
        <p>O Príncipe Amleth está prestes a se tornar um homem
        quando seu tio assassina seu pai e sequestra sua mãe. Duas
        décadas depois, o jovem é agora um viking com a missão de 
        salvar sua mãe, matar o tio e vingar seu pai.</p>
        <br>
        <p>Gênero: ação/aventura</p>
        <p>Duração: 137 minutos</p>
        <p>Data de lançamento: 12/05/2022</p>
        <p>Indicado por: Jean-Claude Van Damme</p>
      </div>
    </main>
  </body>
</html>