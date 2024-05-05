<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/autoResizeTextArea.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&display=swap"
        rel="stylesheet">

</head>

<body class="antialiased">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <div class="container-fluid h-100">
        <div class="row">
            <div class="sidebar">
                <img src="assets/icon.png" class="mt-5" height="100px" alt="">
                <div class="sidebar-content">
                    <button class="btn btn-sidebar-link" onclick="toggleSubMenu('cadastros')">
                        <li>
                            <span><i class="fa-solid fa-people-roof icon-sidebar"></i></span><span>Cadastros</span>
                        </li>
                    </button>
                    <ul class="submenu" id="cadastros">
                        <li>Alunos</li>
                        <li>Salas</li>
                    </ul>
                    <button class="btn btn-sidebar-link" onclick="toggleSubMenu('horarios')">
                        <li>
                            <span><i class="fa-solid fa-clock icon-sidebar"
                                    aria-hidden="true"></i></span><span>Horários</span>
                        </li>
                    </button>
                    <ul class="submenu" id="horarios">
                    </ul>
                </div>
            </div>


            <div class="col">

                <div class="row">

                    <div class="col-12">

                        <!-- As a link -->
                        <nav class="navbar rounded-bottom">
                            <button class="btn sticky-top" data-toggle="collapse" href="#collapseExample" id=""
                                role="button">
                                <i class="bi bi-list"></i>
                            </button>
                            <div class="nav-right">
                                <button class="btn sticky-top">
                                    <i class="bi bi-bell"></i>
                                </button>
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                    style="width: 50px;" alt="Avatar" />
                            </div>
                        </nav>
                        <div class="card p-4 m-3 content-area">

                            <main class="py-4">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
