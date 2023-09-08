<?php
   
    // Incluir o arquivo de conexão com o banco de dados
    include 'conexao.php';
    
    // Função para validar um endereço de e-mail
    function is_valid_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Filtrar e validar os dados de entrada
        $usuario = trim($_POST["usuario"]);
        $email = trim($_POST["email"]);
        $senha = isset($_POST["senha"]) ? $_POST["senha"] : ""; // Senha pode ser opcional
    
        // Verificar se o e-mail fornecido é válido
        if (!is_valid_email($email)) {
            echo "Erro: Endereço de e-mail inválido.";
            exit;
        }
    
        // Gerar uma senha aleatória se não foi fornecida pelo usuário
        if (empty($senha)) {
            $senha = bin2hex(random_bytes(8)); // Gera uma senha de 16 caracteres aleatoriamente (hexadecimal)
        }
    
        // Criptografar a senha usando password_hash
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    
        // Usar declarações preparadas para evitar ataques de injeção SQL
        $stmt = $conn->prepare("INSERT INTO logi (usuario, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $usuario, $email, $senha_hash);
    
        if ($stmt->execute()) {
            echo "Novo cadastro feito com êxito";
            // Redirecionar para a página correta após o cadastro
            header("Location: http://localhost/tcc/menu.php");
            exit;
        } else {
            echo "Erro ao inserir dados no banco de dados.";
        }
    
        $stmt->close();
        $conn->close();
    }
    ?>