<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="leifer mendez, codigoencasa.com, sistema gratis, sistema de reportes">
    <meta name="keywords" content="leifer mendez, codigoencasa, php, proyecto universidad">

    <title>{{ config('app.name', 'Laravel') }} | Sistema de reportes  https://github.com/leifermendez/report-system</title>

    <!-- Scripts -->
    <script src="{{ asset('js/moment/moment.js') }}" defer></script>
    <script src="{{ asset('js/jquery/jquery.js') }}" defer></script>
    <script src="{{ asset('js/jquery-date-range-picker-master/dist/jquery.daterangepicker.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.ganttView-master/lib/date.js') }}" defer></script>
    <script src="{{ asset('js/jquery.ganttView-master/lib/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.ganttView-master/jquery.ganttView.js') }}" defer></script>
    <script src="{{ asset('js/jquery.ganttView-master/example/data.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="https://use.fontawesome.com/1f3c336efc.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @trixassets
    <!-- Styles -->
{{--    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('js/jquery-date-range-picker-master/dist/daterangepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery.ganttView-master/lib/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery.ganttView-master/example/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery.ganttView-master/jquery.ganttView.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customs.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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

        @if (trim($__env->yieldContent('content')))
            <main class="py-4">
                @yield('content')
            </main>
        @endif
        @if (trim($__env->yieldContent('chart-canvas')))
            <main class="p-0">
                @yield('chart-canvas')
            </main>
        @endif
    </div>
    @yield('script')
</body>
</html>
