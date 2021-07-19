@extends('layouts.main')

@section('title')
    Select Type
@endsection

@section('content')
    {{-- <div class="container w-full my-auto mx-auto"> --}}
        <div class="bg-blue-300 w-1/3">
            <a  href="{{ route('partner') }}">
                <button class="w-full h-full">Partner</button>
            </a>
        </div>
        <div class="w-1/3">
            <h1></h1>
        </div>
        <div class="bg-blue-300 w-1/3">
            <a href="{{ route('register') }}">
                <button class="w-full h-full">Client</button>
            </a>
        </div>
        {{-- <div class="flex justify-between">
            <div class="p-40 rounded-lg bg-blue-200  hover:bg-blue-400">
                <a href="{{ route('partner') }}">
                    <button>Partner</button>
                </a>
            </div>

            <div class="p-40 rounded-lg bg-blue-200  hover:bg-blue-400">
                <a href="{{ route('register') }}">
                    <button >Client</button>
                </a>
            </div>
        </div> --}}
    {{-- </div> --}}
@endsection
