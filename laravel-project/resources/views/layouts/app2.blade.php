<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
.container-fluid {
    position:relative;
    top:200px;
}
        </style>
    @yield('style')
</head>
<body class="d-flex flex-column">
    <div id="app">
       
    <div class="logo2">
    <a href="{{url()->previous()}}" class="btn3"><img src="{{url('../public/icons/back.png')}}" alt=".." height="50px" width="50px"/>
</a>
                    <img src="{{url('../public/logo/logo/logo7.png')}}" alt=".." height="170px" width="210px"/>
              </div>

        <main class="container-fluid flex-fill">
            @yield('content')
        </main>
    </div>
</body>
</html>