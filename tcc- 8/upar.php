<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/upar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav class="nav">
            <a class="logo" href="menu.php">
                <img src="img/3000.png" alt="Logo" id="logo-image" width="auto"  height="60px" style="border-radius: 20px;">
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="generos">Selecione os Gêneros:</label><br>
    <div class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
        <input type="checkbox" name="generos[]" value="Fantasia"> Fantasia<br>
        <input type="checkbox" name="generos[]" value="Terror"> Terror<br>
        <input type="checkbox" name="generos[]" value="Romance"> Romance<br>
        <input type="checkbox" name="generos[]" value="Ficção científica">Ficção científica<br>
        <input type="checkbox" name="generos[]" value="Ação e aventura">Ação e aventura<br>
        <input type="checkbox" name="generos[]" value="Distopia">Distopia<br>  
        <input type="checkbox" name="generos[]" value="Ficção Policial">Ficção Policial<br>
        <input type="checkbox" name="generos[]" value="Thriller e Suspense">Thriller e Suspense<br>
        <input type="checkbox" name="generos[]" value="Ficção histórica">Ficção histórica<br>
        <!-- Adicione mais checkboxes para outros gêneros -->
    </div>
        <input type="file" name="fileToUpload" id="fileToUpload" required><br>
        <input type="submit" value="Enviar" name="submit">


        <h2>Enviar Imagem</h2>
        <input type="file" name="imageFile" enctype="multipart/form-data">
    </form>

    <main></main>
<script src="jv/nave.js"></script>
</body>
</html>










Romance
Novela
Ficção Feminina
LGBTQ+
Ficção Contemporânea
Realismo mágico
Graphic Novel
Conto
Young adult – Jovem adulto
New adult – Novo Adulto 
Infantil
Gêneros literário de não ficção
Memórias e autobiografia
Biografia
Gastronomia
Arte e Fotografia
Autoajuda
História
Viagem
Crimes Reais
Humor
Ensaios
Guias & Como fazer 
Religião e Espiritualidade
Humanidades e Ciências Sociais
Paternidade e família
Tecnologia e Ciência
Infantil



