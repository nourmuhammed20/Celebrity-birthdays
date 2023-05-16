<!DOCTYPE HTML>
<html>

<head>
    <title>{{ trans('main-trans.title') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('styles/index.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

</head>

<body>
    <div class="header">
        @include('header')
    </div>
    @yield('content')

    <div class="foot">
        @include('footer')
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="{{ url('scripts/index.js') }}"></script>
    <script src="{{ url('scripts/api.js') }}"></script>
</body>

</html>
