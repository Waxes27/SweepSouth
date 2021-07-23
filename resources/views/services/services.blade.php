@extends('layouts.main')

@section('title')
    Services
@endsection

@section('content')
<body>
    <a href=" {{ route('create_service') }} ">
        <button class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
            Create New Service
        </button>
    </a>
</body>
@endsection
