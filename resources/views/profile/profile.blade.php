@extends('layouts.main')

@section('title')
    Profile
@endsection

@section('content')
    <div class="mx-auto w-full max-w-xs">
        <h1 class="text-center text-3xl p-4 text-blue-400">
            Your profile
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
            @error('phone_number')
                <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="phone_number">{{$message}}</label>
            @enderror
            <input value="{{ old('phone_number') }}" class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_number" type="text" placeholder="Phone number" name="phone_number">
          </div>

          <div class="mb-4">
            @error('Gender')
                <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="Gender">{{$message}}</label>
            @enderror
            <input value="{{ old('Gender') }}" class="focus:text-blue-400 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Gender" type="text" placeholder="Gender" name="Gender">
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




          <button type="submit" class="mb-32 bg-blue-400 rounded hover:text-white p-3 w-full">
              Update Your Profile
          </button>
        </form>
    </div>
</section>
<section>
    <div class="mx-auto my-auto w-full max-w-xs">
        <h1 class="text-center text-3xl p-4 text-blue-400">
            Your Documents
        </h1>
        add buttons and stuff here
    </div>
</section>
@endsection
