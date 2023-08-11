<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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



