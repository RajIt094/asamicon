<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('back') }}/images/favicon.png">
    <link href="{{ asset('back') }}/css/style.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        ::-webkit-scrollbar {

            width: 7px;
        }

        /* Handle */

        ::-webkit-scrollbar-thumb {
            background: #593bdb;
        }


        /* Handle on hover */

        ::-webkit-scrollbar-thumb:hover {
            background: #553bc7;
        }

        .eye {
            position: relative;
            text-align: right;
            float: right;
            margin-right: 9px;
            /* margin-bottom: -1px; */
            bottom: 25px;
        }

    </style>
</head>

<body class="h-100">
    {{-- <div id="preloader" style="z-index: 1;">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
    @yield('content')

      {{-- <div id="preloader" style="z-index: 1;">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}




    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors --
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    // {{-- <script src="{{ asset('back') }}js/global.min.js"></script> --}}
    <script src="{{ asset('back') }}/js/quixnav-init.js"></script>
    // <script src="{{ asset('back') }}/js/custom.min.js"></script>

    @yield('script')
</body>

</html>
