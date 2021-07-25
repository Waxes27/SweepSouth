@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
<body>
    {{-- for partners --}}
    <div class="flex flex-wrap p-3 ">

        <h1 class="text-3xl w-full text-center mb-3">
            Your services
        </h1>
        <div class="grid grid-cols-3 gap-4 w-full flex-wrap">
            @if ($services->count())
                @foreach ($services as $service )
                    <div class=" border p-3 rounded">
                        <div class="text-center w-full">
                            <h1 class=" bg-blue-300 rounded">Service type</h1>
                            <div class="mb-6 bg-white rounded">
                                {{ $service->type }}
                            </div>

                            <h1 class=" bg-blue-300 rounded">description</h1>
                            <div class="mb-6 bg-white rounded">
                                {{$service->description}}
                            </div>

                            <h1 class="bg-blue-300 rounded">Price</h1>
                            <div class="mb-6 bg-white rounded">
                                R{{$service->price}}
                            </div>

                            <button class="w-full">

                            </button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>


    </div>
    <a href="{{ route('create_service') }}">
        <button class="mt-6 bg-blue-400 rounded hover:text-white p-3 w-full">
            Create New Service
        </button>
    </a>
</body>
@endsection
