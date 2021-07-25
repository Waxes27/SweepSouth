@extends('layouts.main')

@section('title')
    Select Type
@endsection

@section('content')
<div class="w-full h-full flex z-1000">
    <div class="bg-blue-300 w-1/3">
        <a  href="{{ route('partner') }}">
            <button class="text-white text-3xl hover:bg-blue-500 hover:text-5xl w-full h-full">Partner</button>
        </a>
    </div>
    <div class="w-1/3">
        <h1></h1>
    </div>
    <div class="bg-blue-300 w-1/3">
        <a href="{{ route('register') }}">
            <button class="text-white text-3xl hover:bg-blue-500 w-full h-full">Client</button>
        </a>
    </div>
</div>


@endsection
