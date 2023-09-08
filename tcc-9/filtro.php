<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/menu-nav.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
        <nav class="nav">
            <a class="logo" href="menu.php">
                <img src="img/logo.png" alt="Logo" id="logo-image" width="auto"  height="40px" style="border-radius: 20px;">
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
    <li><a href="filtro.php?genre=Fantasia">Fantasia</a></li>
    <li><a href="filtro.php?genre=Terror">Terror</a></li>
    <li><a href="filtro.php?genre=Romance">Romance</a></li>
</ul>
                </li>
                <li><a href="upar.php">Publicar</a></li>
            </ul>
        </nav>
    </header>
  
<?php
include 'conexao.php';

// Inicializa a variável de filtro de gênero
$selectedGenre = "";

// Verifica se um gênero foi selecionado a partir do menu dropdown
if (isset($_GET['genre'])) {
    $selectedGenre = $_GET['genre'];

    // Filtra os livros com base no gênero selecionado
    $sql = "SELECT * FROM files WHERE genre LIKE '%$selectedGenre%'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Exibe os livros filtrados
        echo "<h2>Livros do Gênero: $selectedGenre</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
            $fileId = $row["id"];
            $fileTitle = $row["title"];
            $imageFilename = $row["image_filename"];
    
            // Exibe a imagem como um link para a página de detalhes
            echo "<a href='detalhe.php?id=$fileId'>";
            echo "<img src='uploads/images/$imageFilename' alt='$fileTitle' width='100'>";
            echo "</a><br>";
            echo "Título: $fileTitle<br>";
    


        }
    } else {
        echo "Nenhum livro encontrado.";
    }
}

mysqli_close($conn);
?>
<script src="jv/nave.js"></script>
</body>
</html>