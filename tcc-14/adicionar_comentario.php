<?php
include 'funcoesphp/conexao.php'; // Inclua seu arquivo de conexão com o banco de dados

// Receber dados do formulário
$userName = $_POST['userName'];
$commentContent = $_POST['commentContent'];

// Inserir comentário na tabela 'comentario'
$sql = "INSERT INTO comentarios (usuario_id, conteudo) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $userId, $commentContent);

// Obter o ID do usuário com base no nome fornecido
$userId = getUserId($conn, $userName);

if ($stmt->execute()) {
    echo "Comentário adicionado com sucesso!";
} else {
    echo "Erro ao adicionar o comentário: " . $stmt->error;
}

$stmt->close();
$conn->close();

function getUserId($conn, $userName) {
    // Consultar a tabela 'login' para obter o ID do usuário com base no nome
    $sql = "SELECT id FROM logi WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['id'];
}
?>
