<?php
include 'funcoesphp/conexao.php'; // Inclua seu arquivo de conexão com o banco de dados


// Consultar a tabela 'comentario' para obter todos os comentários
$sql = "SELECT comentarios.conteudo, logi.usuario 
        FROM comentarios
        JOIN logi ON comentarios.usuario_id = logi.id
        ORDER BY comentarios.data_de_publicacao DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userName = $row['usuario'];
        $commentContent = $row['conteudo'];
        echo "<li><strong>$userName:</strong> $commentContent</li>";
    }
} else {
    echo "Nenhum comentário encontrado.";
}

$conn->close();
?>
