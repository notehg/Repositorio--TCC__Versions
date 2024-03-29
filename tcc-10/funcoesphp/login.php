<?php

// Arquivo de conexão com o banco de dados
include 'conexao.php';

// Função para validar um endereço de e-mail
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Função para exibir mensagens de erro
function show_error($message) {
    echo '<p class="error-message">' . $message . '</p>';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Filtrar e validar os dados de entrada
    $loginValue = trim($_POST["x"]); // Valor inserido pelo usuário (pode ser nome de usuário ou e-mail)
    $senha = $_POST["w"];

    // Verificar se o nome de usuário ou e-mail não estão em branco
    if (empty($loginValue) || empty($senha)) {
        show_error("Por favor, preencha todos os campos.");
    } else {
        // Usar declarações preparadas para evitar ataques de injeção SQL
        $stmt = $conn->prepare("SELECT id, usuario, email, senha FROM logi WHERE usuario = ? OR email = ?");
        $stmt->bind_param("ss", $loginValue, $loginValue);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $senha_hash = $row["senha"];

                // Verificar a senha usando password_verify
                if (password_verify($senha, $senha_hash)) {
                    // Autenticação bem-sucedida, redirecionar para a página correta após o login
                    header("Location: http://localhost/tcc/menu.php");
                    exit;
                } else {
                    show_error("Senha incorreta.");
                }
            } else {
                show_error("Nome de usuário ou e-mail não encontrado.");
            }
        } else {
            show_error("Erro na consulta ao banco de dados.");
        }

        $stmt->close();
    }

    $conn->close();
}?>