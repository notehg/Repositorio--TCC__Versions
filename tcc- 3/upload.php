<?php
 include 'conecxao.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a PDF
if (isset($_POST["submit"])) {
    if ($pdfFileType !== "pdf") {
        echo "Desculpe, apenas arquivos PDF são permitidos.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Check file size (limit to 5MB)
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Desculpe, o arquivo é muito grande. O tamanho máximo permitido é de 5MB.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Desculpe, o arquivo não foi enviado.";
} else {
    // If everything is ok, try to upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $title = $_POST["title"];
        $genre = $_POST["genre"];
        $filename = basename($_FILES["fileToUpload"]["name"]);

        

        // Insere os dados na tabela
        $sql = "INSERT INTO files (title, genre, filename) VALUES ('$title', '$genre', '$filename')";
        if (mysqli_query($conn, $sql)) {
            echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi enviado e registrado no banco de dados.";
        } else {
            echo "Ocorreu um erro ao registrar o arquivo no banco de dados: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Desculpe, ocorreu um erro ao enviar o arquivo.";
    }
}
?>
