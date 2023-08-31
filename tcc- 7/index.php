<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilo-log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="projeto de login inicial de um site">
    <meta name="keywords" content="user, senha and log">
    <meta name="author" content="Felipe S. silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="Login"> 
        <form method="post">
            <h2>login</h2>
            <div class="mb-3" id="login-form">
                <label for="formGroupExampleInput" class="form-label">Usuário</label>
                <input class="form-control" name="x" type="text" placeholder="Nome de usuário ou Email"  aria-label="default input example">
            </div>


   
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Senha</label>
                <input class="form-control" name="w"  type="password" placeholder="Senha"  aria-label="default input example">
            </div>

            <br>
            <button type="submit">Logar</button>
            <a href="creat.php">Criar conta</a>
        </form>
        <?php
        


//  Arquivo de conexão com o banco de dados
include 'conexao.php';

// Função para validar um endereço de e-mail
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Filtrar e validar os dados de entrada
    $loginValue = trim($_POST["x"]); // Valor inserido pelo usuário (pode ser nome de usuário ou e-mail)
    $senha = $_POST["w"];

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
                header("Location: http://localhost:8012/tcc/menu.php");
                exit;
            } else {
                echo "Erro: Nome de usuário/e-mail ou senha incorretos.";
            }
        } else {
            echo '<p class="error-message">Erro: Usuário, e-mail ou senha incorretos.</p>';
        }
        } else {
        echo '<p class="error-message">Erro na consulta ao banco de dados.</p>';
        }

    $stmt->close();
    $conn->close();
} 

  



?>


</body>
</html>