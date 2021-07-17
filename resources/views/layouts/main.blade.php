<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<div class="p-8 bg-black">
    @yield('header')
</div>
<body>
    <nav>
        <ul>
            <li>Partner with us</li> 
            <li>Order in</li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>