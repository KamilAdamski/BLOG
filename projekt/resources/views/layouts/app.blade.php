<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <hr>
    <div id="app">
    <h1 class="text-center">Witaj na blogu piłkarskim!</h1>
        @yield('content')
    </div>

    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
