<?php
require '../php/editarFILME.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../layout/layout.css">
    <link rel="stylesheet" type="text/css" href="edfilme.css">
    <title>Storyteller - Editar filmes</title>
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
    <h1>Editar dados de um Filme</h1>
        <article>
            <form method="POST" action="../php/editar_postFILME.php">
                
                <input type="hidden" name="id" value="<?=$filme['id'];?>">

                <input type="hidden" name="id_cinefilo" value="<?=$filme['id_cinefilo'];?>">

                <h3>Nome:</h3>
                <input type="text" name="nome" value="<?=$filme['nome'];?>"/>

                <h3>Gênero:</h3>
                <input type="text" name="genero" value="<?=$filme['genero'];?>">

                <h3>Duração em minutos:</h3>
                <input type="time" name="duracao" value="<?=$filme['duracao'];?>">

                <h3>Data de lançamento:</h3>
                <input type="date" name="dt_lancamento" value="<?=$filme['dt_lancamento'];?>">

                <h3>Sinopse:</h3>
                <input type="text" name="sinopse" class="sinopse" value="<?=$filme['sinopse'];?>">

                <input type="submit" class="button" value="Editar Filme">
            </form>
        </article>
    </main>
</body>
</html>     