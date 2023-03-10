<?php
require '../php/editarCINEFILO.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../layout/layout.css">
    <link rel="stylesheet" type="text/css" href="edcinefilo.css">
    <title>Storyteller - Editar cinéfilo</title>
</head>
<body>
    <header>
        <nav id="layout">
            <a href="../index.html" class="logo"><img src="../imagens/logo (1).png" id="logo"></a>
            <ul id="layout">
                <li><a href="../index.html"><img src="../imagens/search.png"></a></li>
                <li><a href="../index.html"><img src="../imagens/home.png"></a></li>
                <li><a href="../listarfilmesadmin/listarfilmesadmin.php"><img src="../imagens/movie.png" id="moovie"></a></li>
                <li><a href="../listarCinefilos/listarCinefilos.php"><img src="../imagens/user 1.png"></a></li>
            </ul>
            <a href="../listarCinefilos/listarCinefilos.php"><img src="../imagens/admin.png" id="layout"></a>
        </nav>
    </header>

    <main>
        <h1>Editar dados de um Cinéfilo</h1>
        <article>
            <form method="POST" action="../php/editar_postCINEFILO.php">
                
                <input type="hidden" name="id" value="<?=$cinefilo['id'];?>">
                
                <h3>Nome:</h3>
                <input type="text" name="nome" value="<?=$cinefilo['nome'];?>"/>

                <h3>Email:</h3>
                <input type="text" name="email" value="<?=$cinefilo['email'];?>"/>

                <input type="submit" class="button" value="Editar Cinéfilo">
            </form>
        </article>

    </main>
</body>
</html>