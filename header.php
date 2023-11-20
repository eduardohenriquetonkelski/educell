<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educell</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap e seu próprio arquivo CSS personalizado aqui -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-dark" href="index.php"><img src="Assets/logotipo.webp" alt="Educell"></a>
            <form class="d-flex ml-auto">
                <input class="form-control me-1 search-bar" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-light" type="submit">Pesquisar</button>
            </form>
            <div class="d-flex ml-2">
                <div class="nav-item">
                    <img src="Assets/atendimento.svg" alt="Atendimento">
                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=554985013537" target="_blank">Atendimento</a>
                </div>
                <div class="nav-item">
                    <img src="Assets/minha_conta.svg" alt="Minha Conta">
                    <a class="nav-link" href="minhaconta.php">Minha Conta</a>
                </div>
                <div class="nav-item">
                    <img src="Assets/carrinho.svg" alt="Meu Carrinho">
                    <a class="nav-link" href="carrinho-compra.php">Meu Carrinho</a>
                </div>
                <div class="nav-item">
                    <img src="Assets/logout.svg" alt="Logout">
                    <a class="nav-link" href="logout.php">Logout</a>
                </div>

            </div>

        </div>
    </nav>
<!-- Barra de categorias e Subcategorias -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container justify-content-center">
        <div class="d-flex ml-2">
        <div class="nav-item">
                  <a class="nav-link" href="index.php">Início</a>          
            </div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="catcelulares.php" id="celularesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Celulares
                </a>
                <div class="dropdown-menu" aria-labelledby="celularesDropdown">
                    <a class="dropdown-item" href="iphone.php">iPhone</a>
                    <a class="dropdown-item" href="motorola.php">Motorola</a>
                    <a class="dropdown-item" href="samsung.php">Samsung</a>
                    <a class="dropdown-item" href="xiaomi.php">Xiaomi</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="catcomputaodres.php" id="computadoresDropdown" role of button data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Computadores
                </a>
                <div class="dropdown-menu" aria-labelledby="computadoresDropdown">
                    <a class="dropdown-item" href="perifericos.php">Periféricos</a>
                    <a class="dropdown-item" href="monitores.php">Monitores</a>
                    <a class="dropdown-item" href="componentes.php">Componentes</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="catacessorios.php" id="acessoriosDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acessórios
                </a>
                <div class="dropdown-menu" aria-labelledby="acessoriosDropdown">
                    <a class="dropdown-item" href="fones.php">Fones</a>
                    <a class="dropdown-item" href="carregadores.php">Carregadores</a>
                    <a class="dropdown-item" href="peliculas.php">Películas</a>
                    <a class="dropdown-item" href="capinhas.php">Capinhas</a>
                </div>
            </div>
            <div class="nav-item">
                  <a class="nav-link" href="contato.php">Contato</a>
            </div>
            
        </div>
    </div>
</nav>
