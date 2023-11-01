<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nomina seminario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('css/bootstrap.css') }}'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('css/miStylos.css') }}'>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>

<body>
    <div class="row nav-img">
        <img src="{{ asset('img/logo.png') }}" id="imgPrincipal" width="30" height="150">
        <h1>SISTEMA DE NOMINA</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav navbar-dark navbar-expand-lg">
                    <li class="nav-item dropdown conten-dropdown">
                        <a class="nav-link dropdown-toggle conten-perfil" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle perfil">&nbsp;</i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Configuracion
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('accrued') }}">Devengado</a></li>
                            <li><a class="dropdown-item" href="{{ route('discount') }}">Descuento</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Departamento
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('department') }}">Listado</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Empleado
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('employee') }}">Listado</a></li>
                            <li><a class="dropdown-item" href="{{ route('payrollPartial') }}">Nomina parcial</a></li>
                            <li><a class="dropdown-item" href="{{ route('payroll') }}">Nomina</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    @yield('content')
</body>
