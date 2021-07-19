@extends('layouts.main')

@section('title')
    Login
@endsection

@section('content')
<div class="mx-auto my-auto w-full max-w-xs">
    <h1 class="text-center text-3xl p-4 text-blue-400">
        Time to Login
    </h1>
    <form class="container justify-center w-full">
      @csrf
      <div class="mb-4">
        {{-- <label class="block text-center text-gray-700 text-sm font-bold mb-2" for="username">
          Username
        </label> --}}
        <input class="focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
      </div>
      <div class="mb-4">
        {{-- <label class="block text-center text-gray-700 text-sm font-bold mb-2" for="username">
          Password
        </label> --}}
        <input class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
      </div>
      <button type="submit" class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
          Login
      </button>

      <a class="text-blue-700 hover:underline" href="{{route('register')}}">No account yet? Register here</a>
      
  </div>
@endsection
