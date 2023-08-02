<?php
 include 'conecxao.php';


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Busca os dados do arquivo no banco de dados
    $sql = "SELECT * FROM files WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $filePath = "uploads/" . $row["filename"];

        if (file_exists($filePath)) {
            header("Content-Disposition: attachment; filename=\"" . basename($filePath) . "\"");
            header("Content-Type: application/octet-stream");
            header("Content-Length: " . filesize($filePath));

            readfile($filePath);
            exit;
        } else {
            echo "O arquivo não existe.";
        }
    } else {
        echo "ID do arquivo não encontrado.";
    }
}

mysqli_close($conn);
?>
