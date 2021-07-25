@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
<body onload="loading_page('intro')">
    <div class="w-full">
        <div id="services" class="flex justify-between bg-gray-400 p-4 text-center h-0 opacity-0 invisible">

        @if ($services->count())
            @foreach ($services as $service )
            <button onmouseover="" class="p-5 bg-white rounded">
                    {{$service->type}}
            </button>
            @endforeach
            @else
                There are no services
        @endif

        </div>
    </div>
</body>
@endsection

