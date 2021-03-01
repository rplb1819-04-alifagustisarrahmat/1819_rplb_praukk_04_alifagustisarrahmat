<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaPMat') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    {{-- Icon --}}
    <link rel="stylesheet" href="{{ asset('plugin\fontawesome-free-5.15.2-web\css\all.min.css') }}">
    <script src="{{ asset('plugin\fontawesome-free-5.15.2-web\js\all.min.js') }}"></script>

    {{-- datatables --}}
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark shadow-sm" style="background-color: #202020;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-thumbnail" src="{{ asset('image/ONLYLOGO.png') }}" alt="LaPMat" style="width: 40px; height: 40px">
                    {{ config('app.name', 'LaPMat') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Data Master</a>
                            <div class="dropdown-menu">
                                <a href="petugas" class="dropdown-item">Petugas</a>
                                <a href="masyarakat" class="dropdown-item">Masyarakat</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="aduan" class="nav-link">Aduan</a>
                        </li>
                        <li class="nav-item">
                            <a href="laporan" class="nav-link">Laporan</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="my-4 py-5">
            <div class="container">
            
            <h1>@yield('title')</h1>

            <div class="card">
                <div class="card-header bg-white">
                    
                    <div class="row">
                        <div class="col"><h3>@yield('card_title')</h3></div>
                        <div class="col">@yield('button')</div>
                    </div>
        
                    <div class="card-body bg-white">
                        @yield('card_content')
                    </div>
                </div>
            </div>

            @yield('foot_content')

            </div>
        </main>

        <footer class="mt-4">
            <div class="navbar fixed-bottom" style="background-color: #202020;">
                <p class="muted credit mx-auto text-white">Copyright 2021 LaPMat All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    {{-- datatables --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
