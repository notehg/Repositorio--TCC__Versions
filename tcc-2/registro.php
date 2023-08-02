<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="estilo-log.css">
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


<form>
  
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">usuario</label>
  <input class="form-control" name="y" type="text" placeholder="Email ou nome de usuario"  >
  <div class="mb-3">
    
  <div class="mb-3" >
  <label for="formGroupExampleInput" class="form-label">Email</label>
  <input class="form-control" name="t" placeholder="Email" type="text"  >
  <div class="mb-3">
   
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">senha</label> 
  <input class="form-control" name="b" placeholder="senha" type="text"   >   
  <div class="mb-3">
  


  <br>

  <button>create</button>


<script src="java.js"></script>  
</form>
</form>
</div>


<?php

include 'conecxao.php';


$usuario =$_POST["y"];
$email=$_POST["t"];
$senha =$_POST["b"];



$sql = "INSERT INTO logi (usuario,email,senha)
VALUES ('$usuario', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo "Novo cadastro feito com êxito";
  echo '<script>window.location.replace("http://localhost/tcc/index.php");</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>