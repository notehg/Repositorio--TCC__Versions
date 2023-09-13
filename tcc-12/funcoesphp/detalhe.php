<?php
include './funcoesphp/conexao.php';

// Inicializar a sessão (se já não estiver inicializada)
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // Se não estiver autenticado, redirecione para a página de login
    header("Location: http://localhost/tcc/index.php");
    exit;
}

// Obtém o ID do livro da URL
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Busca os detalhes do livro no banco de dados usando o ID
    $sql = "SELECT * FROM files WHERE id = $fileId";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fileTitle = $row["title"];
        $fileGenre = $row["genre"];
        $pdfFilename = $row["pdf_filename"];
        $imageFilename = $row["image_filename"];
        $sinopse = $row["sinopse"];

        // Exibe os detalhes do livro de forma organizada
        echo "<h1>$fileTitle</h1>";
        echo "<img src='./uploads/images/$imageFilename' alt='$fileTitle'><br>";
        echo "<p><strong>Gênero:</strong> $fileGenre</p>";
        echo "<p><strong>Sinopse:</strong> $sinopse</p>";

        // Botão para ler online (abre o PDF em uma nova aba)
        echo "<a href='uploads/$pdfFilename' target='_blank'>Ler Online</a>";

        // Botão para baixar o livro (fornece o link para download)
        echo "<a href='uploads/$pdfFilename' download>Baixar PDF</a>";
    } else {
        echo "Livro não encontrado.";
    }
} else {
    echo "ID do livro não fornecido na URL.";
}

mysqli_close($conn);
?>


