<?php
session_start();
$raiz = dirname(__DIR__, 2);
include_once $raiz . '/setup/connect.php';

// include '../../setup/connect.php';
if (!isset($_SESSION['email'])) {
    header('Location: ../index.php?paginaerrosession=true');
    die();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --sidebar-width: 250px;
        }

        body {
            background-color: #f8f9fa;
        }

        /* Ajuste para Sidebar Fixa (Estilo AdminLTE) */
        .sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background-color: #212529;
            transition: all 0.3s;
        }

        .nav-link {
            color: #adb5bd;
            transition: 0.2s;
        }

        .nav-link:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            color: #fff;
            background: #0d6efd;
            border-radius: 5px;
        }

        .main-content {
            width: calc(100% - var(--sidebar-width));
        }

        /* Estilo dos cards de resumo */
        .stat-card {
            border: none;
            border-left: 5px solid;
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <nav class="sidebar d-none d-md-block p-3">
            <div class="d-flex align-items-center mb-4 text-white">
                <i class="bi bi-shield-lock-fill fs-4 me-2"></i>
                <span class="fs-5 fw-bold">AdminPanel</span>
            </div>
            <hr class="text-secondary">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>admin/home.php" class="nav-link active mb-2">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>
                </li>
                
                <li>
                    <a href="#" class="nav-link mb-2">
                        <i class="bi bi-person-gear me-2"></i> Usuários
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link mb-2">
                        <i class="bi bi-graph-up me-2"></i> Relatórios
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base_url; ?>admin/books/select.php" class="nav-link mb-2">
                        <i class="bi bi-graph-up me-2"></i> Livros
                    </a>
                </li>
            </ul>

            <div class="mt-auto pt-5">
                <a href="logout.php" class="btn btn-outline-danger w-100">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>

        </nav>

        <div class="main-content flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom px-4 py-3">
                <div class="container-fluid">
                    <span class="navbar-text fw-medium">
                        <i class="bi bi-list me-3 d-md-none"></i>
                        Área Administrativa
                    </span>
                    <div class="ms-auto d-flex align-items-center">
                        <span class="me-3 text-muted">Bem-vindo, <strong><?php echo $_SESSION['email']; ?></strong></span>
                        <img src="https://ui-avatars.com/api/?name=Admin&background=random" class="rounded-circle" width="35" height="35">
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">