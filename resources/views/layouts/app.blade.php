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
            <li class="p-3"><a href="{{ route('home') }}">Home </a></li>
            <li class="p-3"><a href="{{ route('dashboard') }}">Dashboard </a></li>
            <li class="p-3"><a href="{{ route('posts') }}">Post</a></li>
        </ul>
        <ul class="flex items-center">
            @if (auth()->user())
                <li class="p-3"><a href="">{{ auth()->user()->name }} </a></li>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit">logout</button>
                </form>
            @else
                <li class="p-3"><a href="{{ route('login') }}">Login</a></li>
                <li class="p-3"><a href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
    </nav>
    @yield('content')
</body>

</html>
