@extends('layouts.main')

@section('title')
    Partner
@endsection

@section('content')
Need to move this to profile
<div class="mx-auto my-auto w-full max-w-xs">
    <h1 class="text-center text-3xl p-4 text-blue-400">
        Time to Partner
    </h1>
    <form method="POST" action="" class="container justify-center w-full">
      @csrf
      <div class="mb-4">
        @error('name')
            <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
        @enderror
        <input value="{{ old('name') }}" class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Name" name="name">
      </div>

      <div class="mb-4">
        @error('id_number')
            <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
        @enderror
        <input value="{{ old('id_number') }}" class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_number" type="text" placeholder="Identification number" name="id_number">
      </div>


        <div class="mb-4">
        @error('email')
            <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
        @enderror
            <input value="{{ old('email') }}" class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" name="email">
        </div>


        <div class="mb-4">
        @error('username')
            <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
        @enderror
        <input value="{{ old('username') }}" class="focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username">
      </div>


      <div class="mb-4">
        @error('password')
            <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
        @enderror
        <input class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" name="password">
      </div>

      <div class="mb-4">
        @error('password_confirmation')
            <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
        @enderror
        <input class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" placeholder="Password again" name="password_confirmation">
      </div>

      <button type="submit" class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
          Partner
      </button>
    </form>
</div>

@endsection
