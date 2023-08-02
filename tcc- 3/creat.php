<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="css/estilo-log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="projeto de login inicial de um site">
    <meta name="keywords" content="user,senha and log">
    <meta name="author" content="Felipe S. silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="Login">
        <form method="post">
            <h2>create account</h2>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Usuário</label>
                <input class="form-control" name="y" type="text" placeholder="Email ou nome de usuário">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input class="form-control" name="t" placeholder="Email" oninput="validacaoEmail(this)" type="text">
                <div id="emailError" class="error-message"></div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Senha</label>
                <input class="form-control" name="b" placeholder="Senha" type="password">
            </div>
            <br>
            <button type="submit">create</button>
        </form>
    </div>
    <script src="java/creat.js"></script>

    <?php
    include 'conecxao.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $usuario = $_POST["y"];
        $email = $_POST["t"];
        $senha = $_POST["b"];

        // Use declarações preparadas para evitar ataques de injeção SQL
        $stmt = $conn->prepare("INSERT INTO logi (usuario, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $usuario, $email, $senha);

        if ($stmt->execute()) {
            echo "Novo cadastro feito com êxito";
            echo '<script>window.location.replace("http://localhost:8012/tcc/menu.php");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
