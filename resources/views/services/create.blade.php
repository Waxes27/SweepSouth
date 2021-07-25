@extends('layouts.main')

@section('title')
    Add a services
@endsection

@section('content')
<body>
    <div class="mx-auto">
        <h1 class="text-center text-3xl p-4 text-blue-400 mb-5">
            Create A New Service
        </h1>
        <form class="container justify-center w-1/2 mx-auto" action="" method="post">
            @csrf
            <div>
                <label class="block text-center underlined text-gray-700 text-sm font-bold mb-2" for="kind">Service Type</label>
                @error('kind')
                <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="kind">{{$message}}</label>
                @enderror
                <div>
                    <input value="{{old('kind')}}" name="kind" class="@error('kind') text-red-500 @enderror focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What kind of Service are you offering?">
                </div>
            </div>

            <div>
                <label class="block text-center underlined text-gray-700 text-sm font-bold mb-2 mt-2" for="Service Description">Service Description</label>
                @error('description')
                <label class=" flex block text-center text-red-500 underlined text-sm font-bold" for="description">{{$message}}</label>
                @enderror

                <div>
                    <input value="{{old('kind')}}" name="description" class="@error('description') border-red-500 @enderror focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Describe the Service...">
                </div>
            </div>

            <div>
                <label class="block text-center underlined text-gray-700 text-sm font-bold mb-2 mt-2" for="Service Price">Service Pricing</label>
                @error('price')

                <label class="flex block text-center text-red-500 underlined text-sm font-bold" for="Service Price">{{$message}}</label>
                @enderror

                <div>
                    <input value="{{old('kind')}}" name="price" class="@error('price') border-red-500 @enderror focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What is the price of the Service?">
                </div>
            </div>

            <button type="submit" class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
                Add Service
            </button>
        </form>
    </div>
</body>
@endsection
