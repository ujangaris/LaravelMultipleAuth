<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('loginPage/bs5/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('loginPage/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('loginPage/css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('loginPage/css/checkbox.css') }}">
    <link rel="stylesheet" href="{{ asset('loginPage/bsicons/font/bootstrap-icons.css') }}">

    <title>Login Page</title>
</head>

<body>

    <div class="container-fluid">
        @yield('content')
        @include('partials.alerts')


    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('loginPage/bs5/dist/js/bootstrap.bundle.js') }}"></script>

</body>

</html>
