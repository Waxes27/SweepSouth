<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<div class="p-8 bg-black flex justify-between">
    <div>
        <button onclick="menu('menuBar')" class="p-2  bg-gray-100 hover:bg-gray-200 rounded-md">Menu</button>
    </div>
    <div>
        <a href="{{route('login')}}"><button class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">Login</button></a>
        <a href="{{route('register')}}"><button class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">Register</button></a>
        {{-- <a href="{{route('logout')}}"><button class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">Logout</button></a> --}}
        {{-- <a href="{{route('refer')}}"><button class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">Your Refferal Code</button></a> --}}
    </div>
</div>

<div class="flex">
    <nav id="menuBar" class="flex w-0 opacity-0 bg-black text-white h-screen">
        <ul class="transition ease-in-out duration-500 hover:bg-gray-400 w-full text-center">
            <li class="py-2">
                <a href=" {{route('services')}} "><button class="p-4 w-full transition ease-in-out duration-500 hover:bg-red-400" >Order In</button></a>
            </li>
            <li class="py-2">
                <a href="{{route('services')}}"><button class="p-4 w-full transition ease-in-out duration-500 hover:bg-red-400" >Partner with us</button></a>
            </li>
        </ul>
    </nav>
    <body>        
        @yield('content')
    </body>
</div>
<script src="{{ asset('js/main.js') }}"></script>
</html>
