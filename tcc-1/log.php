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


<div id="Login" method="post"> 

<form>

<h2>login</h2>


<form>
  
  <div class="mb-3" id="login-form">
  <label for="formGroupExampleInput" class="form-label">usuario</label>
  <input class="form-control" name="x" type="text" placeholder="Nome de usuario"  aria-label="default input example">
  <div class="mb-3">

  <div class="mb-3" id="login-form">
  <label for="formGroupExampleInput" class="form-label">Email</label>
  <input class="form-control" name="t" type="text" placeholder="Email"  aria-label="default input example">
  <div class="mb-3">
   
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">senha</label>
  <input class="form-control" name="w"  type="text" placeholder="senha"  aria-label="default input example">
  <div class="mb-3">

  <br>

  <button>Logar</button>

  <a href="registro.php">create account</a>
  
</form>
</form>
</div>


<?php

include 'conecxao.php';


$usuario =$_POST["x"];
$senha =$_POST["w"];
$Email =$_POST["t"];




$sql = "SELECT * FROM logi WHERE usuario='$usuario' or email='$Email'
and senha = '$senha'" ; 
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  echo '<script>window.location.replace("http://localhost/tcc/index.php");</script>';

  
} else {
  echo "erro";
  
}



?>

</body>
</html>