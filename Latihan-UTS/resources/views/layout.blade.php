<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <img src="{{ asset('images/image.png') }}" alt="" width="10px" height="100">
        </div>
        <div class="row">
            <div class="col">@yield('content')</div>
        </div>
        <div class="row">
            <div class="col text-center">@ WebProg 2024</div>
        </div>
    </div>
</body>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>