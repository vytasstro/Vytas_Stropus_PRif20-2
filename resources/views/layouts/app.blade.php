<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel project - @yield('title')</title>
</head>
<body>
    <div>
        <header class="m-10 text-right">
            <a href="{{ route('index') }}"><button type="button" class="btn btn-primary">Home</button></a>
            @guest
                <a href="{{ route('login') }}"><button class="btn">Login</button></a>
            @else
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button class="btn">Logout ({{ auth()->user()->name }})</button>
                </a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                    @csrf
                </form>
            @endguest
        </header>
    </div>
    @yield('content')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>