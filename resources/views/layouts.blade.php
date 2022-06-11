<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apreciacion Docente</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ 'css/normalize.css' }}" />
    <link rel="stylesheet" href="{{ 'css/app.css' }}" />
</head>

<body class="antialiased">
    <div class="app-wrapper">
        <aside class="sidebar" id="sidebar">
            <div class="system-logo">
                <img src="img/LogoSGA_64 1.png" id="img-logo" alt="" />
                <h1 class="site-name">Sistema de apreciacion docente</h1>
            </div>
            <div class="option-sidebar">
                <ul class="list-options">
                    <li title="Resultado de encuestas"
                        class="{{ request()->routeIs('resultado.index') || request()->routeIs('') ? 'active' : '' }}"><a
                            href="{{ route('resultado.index') }}"><i class="fa-solid fa-file-arrow-down"></i>
                            <span>Resultado de encuestas</span></a></li>
                    <li title="Docente" class="{{ request()->routeIs('docente.index') ? 'active' : '' }}"><a
                            href="{{ route('docente.index') }}"><i class="fa-solid fa-graduation-cap"></i>
                            <span>Docentes</span></a></li>
                    <li title="Encuestas"><a href=""><i class="fa-brands fa-telegram"></i> <span>Encuestas</span></a>
                    </li>
                    <li title="Comicion de encuestas"><a href=""><i class="fa-solid fa-users"></i> <span>Comicion de
                                encuestas</span></a></li>
                </ul>
            </div>

            <ul class="list-options footer-list">
                <li title="Foro de preguntas"><a href=""><i class="fa-solid fa-book-quran"></i> <span>Foro de
                            preguntas</span></a></li>
                <li title="Centro de ayuda"><a href=""><i class="fa-solid fa-circle-question"></i> <span>Centro de
                            ayuda</span></a></li>
            </ul>

        </aside>
        <div class="content-app">
            <header class="site-header">
                <div class="menu">
                    <i class="fa-solid fa-bars" id="menu-collapse"></i>
                </div>
                <div class="header-information">
                    <div class="home-site">
                        <i class="fa-solid fa-house-user"></i>
                    </div>
                    <h2>Bienvenido a SISAD - FIIS</h2>
                    <img src="img/user.png" alt="" />
                </div>
            </header>
            <main class="site-main">

                @section('breadcrumbs')
                    <h3 class="search-result">Resultado de la busqueda <span>2022-X</span></h3>
                    <ul class="breadcrumb">
                        <li>SISD</li>
                        <li>/</li>
                        <li>Director DACIS-FIIS</li>
                        <li>/</li>
                        <li>2022-1</li>
                    </ul>
                @show
                <div class="main-content">
                    @yield('content')
                </div>
            </main>
            <footer class="site-footer">Footer</footer>
        </div>
    </div>

    <script src="{{ 'js/app.js' }}"></script>
</body>

</html>
