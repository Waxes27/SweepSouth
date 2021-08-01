<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<div class="sticky bg-opacity-75 top-0 w-full p-8 bg-black flex justify-between">
    {{-- @auth --}}
    <div>
        <button onclick="menu('menuBar')" class="p-2  bg-gray-100 hover:bg-gray-200 rounded-md">Menu</button>
    </div>
    <button onclick="services('services')" class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">
        Services
    </button>

    {{-- @endauth --}}
    <div>
        @guest()
        <a href="{{route('login')}}"><button class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">Login</button></a>
        {{-- <a href="{{route('partnerUser')}}"><button class="p-2 transition-colors duration-500 ease-in-out text-white hover:text-black hover:bg-gray-200 rounded-md">Register</button></a> --}}
        @endguest
        @auth()
            <div class="flex justify-between space-x-3">
                <div>
                    <button onclick="account('account')" class="p-2  bg-gray-100 hover:bg-gray-200 rounded-md">Account</button>
                </div>
            </div>
        @endauth

    </div>
</div>

<div class="flex">
    @auth()
        <nav id="menuBar" class="flex w-0 opacity-0 bg-black text-white h-screen invisible">
            <ul class="transition ease-in-out duration-500 hover:bg-gray-400 w-full text-center">
                <li class="py-2">
                    <a href=" {{route('services')}} "><button class="p-4 w-full transition ease-in-out duration-500 hover:bg-red-400" >Order In</button></a>
                </li>
                <li class="py-2">
                    <a href="{{route('services')}}"><button class="p-4 w-full transition ease-in-out duration-500 hover:bg-red-400" >Partner with us</button></a>
                </li>
            </ul>
        </nav>
    @endauth
    @guest()

    <nav id="menuBar" class="flex w-0 opacity-0 bg-black text-white h-screen">
        <ul class="transition ease-in-out duration-500 hover:bg-gray-400 w-full text-center">
            <li class="py-2">
                <a href=" {{route('login')}} "><button class="p-4 w-full transition ease-in-out duration-500 hover:bg-red-400" >Please login to view menu</button></a>
            </li>
        </ul>
    </nav>

    @endguest
    <div class="w-full">
        <div id="services" class="flex justify-between bg-gray-400 text-center h-0 opacity-0 invisible">
            @if ($services->count())
                @foreach ($services as $service )

                <button onclick="" class="p-5 bg-white rounded">
                        {{$service->type}}
                </button>
                @endforeach
                @else
                <h1 class="flex justify-center">
                    There are no services
                </h1>
            @endif

        </div>
    {{-- </div> --}}


        <div id="account" class="flex justify-end h-0 opacity-0 invisible absolute">
            <div class="space-y-4">
                <div>
                    {{-- <a href="{{ route('profile') }}"><button class="bg-black text-white p-3 w-full rounded">profile</button></a> --}}
                </div>
                <div>
                    <a href="{{route('logout')}}"><button class="bg-black text-white p-3 w-full rounded">Refer</button></a>
                </div>
                <form action=" {{ route('logout') }}" method="post">
                    @csrf
                    <button class="bg-black text-white p-3 w-full rounded" type="submit">Logout</button>
                </form>
            </div>

        </div>


        {{-- <div class="text-center p-4 bg-red-500 w-1/3 mx-auto">
            <div>Offered By</div>
            <div>type</div>
            <div>Description</div>
            <div>Price</div>

        </div> --}}

        <body>
            @yield('content')
        </body>

    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
</html>
