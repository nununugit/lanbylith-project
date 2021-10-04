<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CST2020') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/nav_jquery.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta name="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js" integrity="sha512-UXumZrZNiOwnTcZSHLOfcTs0aos2MzBWHXOHOuB0J/R44QB0dwY5JgfbvljXcklVf65Gc4El6RjZ+lnwd2az2g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js" integrity="sha512-qRj8N7fxOHxPkKjnQ9EJgLJ8Ng1OK7seBn1uk8wkqaXpa7OA13LO6txQ7+ajZonyc9Ts4K/ugXljevkFTUGBcw==" crossorigin="anonymous"></script>
</head>

<body>
    <div >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm　">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
            </a>

            <div class='navbar2nd'>
                <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
                <nav class="navbar-nav mr-auto">
                <ul>
                <li class="url1"><a href="{{ url('/home') }}">Home</a></li>
                <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/question') }}" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Question
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ url('/question/tutorial') }}">tutorial</a>
                          <a class="dropdown-item" href="{{ url('/question/easy') }}">easy</a>
                          <a class="dropdown-item" href="{{ url('/question/normal') }}">normal</a>
                          <a class="dropdown-item" href="{{ url('/question/hard') }}">hard</a>
                          <a class="dropdown-item" href="{{ url('/question/extra') }}">extra</a>
                        </div>
                </div>
                <li class="url3"><a href="{{ url('/rank') }}">Rank</a></li>
                <li class="url4"><a href="{{ url('/roulette') }}">roulette</a></li>
                <li class="url5"><a href="{{ url('/sort') }}">Sort</a></li>

            </ul>
                </nav>
            </div>
            <script src="{{ asset('js/gauge_jquery.js') }}" defer></script>
                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

