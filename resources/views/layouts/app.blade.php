<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posty</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-3">
        <ul class="flex items-center">
            <li class="p-3"><a href="">Home </a></li>
            <li class="p-3"><a href="">Dashboard </a></li>
            <li class="p-3"><a href="">Post</a></li>
        </ul>
        <ul class="flex items-center">
            @if (auth()->user())
                <li class="p-3"><a href="">Tony </a></li>
                <li class="p-3"><a href="{{ route('logout') }}">logout</a></li>
            @else
                <li class="p-3"><a href="{{ route('login') }}">Login</a></li>
                <li class="p-3"><a href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>
</html>
