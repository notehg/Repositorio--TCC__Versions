<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/upar.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav class="nav">
            <a class="logo" href="menu.php">
                <img src="img/logo.png" alt="Logo" id="logo-image" width="auto"  height="60px" style="border-radius: 20px;">
            </a>
            <div class="mobile-menu" id="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="#">Em alta</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Gêneros</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Fantasia</a></li>
                        <li><a href="#">Terror</a></li>
                    </ul>
                </li>
                <li><a href="upar.php">Publicar</a></li>
            </ul>
        </nav>
    </header>

    <h1>Upload de Arquivo</h1>
<!--action da o caminho para o arquivo de execução upload.php-->
<form  method="post" enctype="multipart/form-data">
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="sinopse">Sinopse:</label>
    <textarea name="sinopse" id="sinopse" rows="4"></textarea><br>

    <label for="generos">Selecione os Gêneros:</label><br>
    <div class="check" aria-labelledby="navbarScrollingDropdown">
        <input type="checkbox" name="generos[]" value="Fantasia"> Fantasia<br>
        <input type="checkbox" name="generos[]" value="Terror"> Terror<br>
        <input type="checkbox" name="generos[]" value="Romance"> Romance<br>
        <input type="checkbox" name="generos[]" value="Ficção científica"> Ficção científica<br>
        <input type="checkbox" name="generos[]" value="Ação e aventura"> Ação e aventura<br>
        <input type="checkbox" name="generos[]" value="Distopia"> Distopia<br>
        <input type="checkbox" name="generos[]" value="Ficção Policial"> Ficção Policial<br>
        <input type="checkbox" name="generos[]" value="Thriller e Suspense"> Thriller e Suspense<br>
        <input type="checkbox" name="generos[]" value="Ficção histórica"> Ficção histórica<br>
        <!-- Adicione mais checkboxes para outros gêneros -->
    </div>

    <h2>Enviar Imagem</h2>
    <input type="file" name="imageFile" enctype="multipart/form-data">

    <h2>Enviar PDF</h2>
    <input type="file" name="fileToUpload" id="fileToUpload" required><br>

    <input type="submit" value="Enviar" name="submit">
</form>
<main></main>

<?php
   include('funcoesphp/upload.php')
    ?>

<script src="jv/nave.js"></script>

</body>
</html>