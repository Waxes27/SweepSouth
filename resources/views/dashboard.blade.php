@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
<body>
    {{-- for partners --}}
    <div class="flex flex-wrap p-3 bg-red-300">

        <h1 class="text-3xl w-full text-center mb-3">
            Your services
        </h1>
        <div class="flex flex-wrap justify-between">
            @if ($services->count())
                @foreach ($services as $service )
                    <div class="bg-blue-500">
                        {{$service}}
                        {{ auth()->user()->id }}
                    </div>
                @endforeach
            @endif
        </div>


    </div>
    <a href=" {{ route('create_service') }} ">
        <button class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
            Create New Service
        </button>
    </a>
</body>
@endsection
