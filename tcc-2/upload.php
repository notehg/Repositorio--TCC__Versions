<?php
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

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
  echo "Desculpe, o arquivo é muito grande. O tamanho máximo permitido é de 5GB.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Desculpe, seu arquivo não foi enviado.";
// If everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi enviado com sucesso.";
  } else {
    echo "Desculpe, ocorreu um erro ao enviar seu arquivo.";
  }
}
?>