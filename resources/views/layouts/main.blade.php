<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon-16x16.png') }}" type="image/x-icon">

</head>

<body>
    @include('partials.nav')
    <div class="container mt-3">
        @yield('dani')
    </div>

</body>

</html>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
