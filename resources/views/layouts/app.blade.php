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

        <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("assets/css/app-modern.min.css") }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset("assets/css/app-modern-dark.min.css") }}" rel="stylesheet" type="text/css" id="dark-style" />

        @stack('header_scripts')

    </head>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>


        @include("layouts.components.navbar")

        <div class="container-fluid">

                    <div class="wrapper">


                        @include("layouts.components.sidebar")


                        <div class="content-page">

                            <div class="content">

                               @yield("content")

                            </div>


                           @include("layouts.components.footer")

                        </div>

                    </div>
                </div>

        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset("assets/js/app.min.js") }}"></script>

        @stack('footer_scripts')

    </body>

</html>
