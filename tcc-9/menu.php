<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/menu-nav.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
        <nav class="nav">
            <a class="logo" href="menu.php">
                <img src="img/logo.png" alt="Logo" id="logo-image" width="auto"  height="40px" style="border-radius: 20px;">
            </a>
            <div class="mobile-menu" id="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="#">Em alta</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Gêneros</a>
                    <ul class="dropdown-menu">
    <li><a href="filtro.php?genre=Fantasia">Fantasia</a></li>
    <li><a href="filtro.php?genre=Terror">Terror</a></li>
</ul>
                </li>
                <li><a href="upar.php">Publicar</a></li>
                
            </ul>
        </nav>
    </header>
  



    <ul>
        <?php

include('funcoesphp/listar.php')
        ?>
    </ul>


    <main></main>
<script src="jv/nave.js"></script>
</body>
</html>