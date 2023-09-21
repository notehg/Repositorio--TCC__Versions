<?php

// Arquivo de conexão com o banco de dados
include 'conexao.php';

// Verificar se o usuário está logado
if (isset($_SESSION['id'])) {

    // Receber dados do formulário
    $commentContent = $_POST['commentContent'];
    $fileId = $_GET['id'];

    // Definir a variável de sessão para o ID do usuário
    $userId = $_SESSION['id'];

    // Inserir comentário na tabela 'comentarios'
    $sql = "INSERT INTO comentarios (conteudo, livro_id, usuario_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $commentContent, $fileId, $userId);
    $stmt->execute();

    // Fechar o cursor
    $stmt->close();

    // Fechar a conexão
    $conn->close();

    // Redirecionar para a página do livro
    header("Location: livro.php?id=$fileId");
} else {
    // Exibir mensagem de erro ou redirecionar para a página de login
    echo "Você precisa estar logado para adicionar um comentário.";
}

?>
