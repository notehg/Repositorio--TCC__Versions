<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/menu-nav.css">
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
  


<h1>Lista de Arquivos</h1>
    <ul>
        <?php

        include 'conexao.php';
        // Verifica a conexão
        if (!$conn) {
          die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
      }

      // Busca os dados dos arquivos no banco de dados
      $sql = "SELECT * FROM files";
      $result = mysqli_query($conn, $sql);

      // Verifica se há arquivos para exibir
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            //id
              $fileId = $row["id"];
              //titulo
              $fileTitle = $row["title"];
              //genero
              $fileGenre = $row["genre"];
              //imagem do livro
              $imageFilename = $row["image_filename"];

              //listar
              echo "<li>";
              echo "<img src='uploads/images/$imageFilename' alt='$fileTitle' height='100'><br>";
              echo "Título: $fileTitle<br>";
              echo "Gênero: $fileGenre<br>";
              
          }
      } else {
          echo "Não há arquivos para exibir.";
      }

      mysqli_close($conn);
        
        ?>
    </ul>


    <main></main>
<script src="jv/nave.js"></script>
</body>
</html>