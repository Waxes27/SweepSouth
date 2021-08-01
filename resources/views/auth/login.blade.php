@extends('layouts.main')

@section('title')
    Login
@endsection

@section('content')
<div class="m-auto mt-36 w-full max-w-xs">
    <h1 class="text-center text-3xl p-4 text-blue-400">
        Time to Login
    </h1>
    @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="" class="container justify-center w-full">
      @csrf
      @error('username')
      <label class="block text-red-500 text-center text-gray-700 text-sm font-bold mb-2" for="username">
        {{$message}}
      </label>
      @enderror
      <div class="mb-4">
        <input class="focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username">
      </div>
      @error('password')
      <label class="block text-red-500 text-center text-gray-700 text-sm font-bold mb-2" for="username">
        {{$message}}
      </label>
      @enderror
      <div class="mb-4">

        <input class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" name="password">
      </div>
      <button type="submit" class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
        Login
    </button>

      <a class="text-blue-700 hover:underline" href="{{route('partnerUser')}}">No account yet? Register here</a>

  </div>
@endsection
