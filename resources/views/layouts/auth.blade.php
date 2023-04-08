<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8" />
        <title>@yield('title') | AUTO SCHOOL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="WARIODDLY" />
{{--        <link rel="shortcut icon" href="assets/images/favicon.ico">--}}

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/css/app-modern.min.css") }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset("assets/css/app-modern-dark.min.css") }}" rel="stylesheet" type="text/css" id="dark-style" />
        <link href="{{ asset("assets/css/app.css") }}" rel="stylesheet" type="text/css" id="dark-style" />
        <script src="{{ asset('assets/js/app-vite.js') }}"></script>

    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

        <div id="app">

            <div class="auth-fluid">

                @yield('content')

            </div>

        </div>

        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset("assets/js/app.min.js") }}"></script>


{{--        <!-- Authentication Links -->--}}
{{--        @guest--}}
{{--            @if (Route::has('login'))--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}

{{--            @if (Route::has('register'))--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        @else--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                    {{ Auth::user()->name }}--}}
{{--                </a>--}}

{{--                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                        {{ __('Logout') }}--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        @endguest--}}

    </body>

</html>
