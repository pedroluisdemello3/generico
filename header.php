<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Genérico</title>
</head>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<body>

    <div class="container-fluid text-center">
        <a href="index.php" title="Retornar á página inicial">
            <img src="img/logo.webp" width="200">
        </a>
        <h1>Genérico-Sistema web de Vendas</h1>
    </div>
    <!--Barra de Navegação do Sistema-->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" title="ir para Página Inicial">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="formLogin.php">Cadastrar Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="formLogin.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Container PRINCIPAL do sistema-->


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">