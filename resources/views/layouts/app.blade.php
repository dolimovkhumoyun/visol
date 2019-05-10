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
     
   <script src="{{ asset('js/jquery.js') }}"></script>
   <script src="{{ asset('js/moment.min.js') }}"></script>
   <script src="{{ asset('js/zabuto_calendar.min.js') }}"></script>
   

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/zabuto_calendar.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app container">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            <main class="py-4">
            @yield('content')
            </main>
        </div>

       
    </div>

    <main class="py-4">
            @yield('scripts')
            </main>
</body>
</html>
