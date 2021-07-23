@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
<body>
    <div class="p-4 bg-red-500 w-full">
        @if ($services->count())
            @foreach ($services as $service )
                <div class="bg-blue-500 w-1/3">
                    {{$service->type}}
                </div>
            @endforeach
        @endif
    </div>
</body>
@endsection
