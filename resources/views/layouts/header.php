<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Dev-cursos-php</title>
</head>
<body class="bg-dark text-light">
    <main class="container">
    <h1 class="">Dev-Cursos</h1>
    <nav class="navbar navbar-dark bg-dark float-end">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dev-Cursos</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashbaord</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cursos
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Listar Cursos</a></li>
                    <li><a class="dropdown-item" href="#">Criar Curso</a></li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <p class="fs-5">Use os links para navegar no cms</p>
        
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid text-light">
        <a class="navbar-brand text-light" href="#">Dashboard</a>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link text-light" href="#">Cursos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
        