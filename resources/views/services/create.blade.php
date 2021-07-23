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
        <form class="container justify-center w-full" action="" method="post">
            <div>
                <label class="block text-center underlined text-gray-700 text-sm font-bold mb-2" for="Service Type">Service Type</label>
                <div>
                    <input class="focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What kind of Service are you offering?">
                </div>
            </div>

            <div>
                <label class="block text-center underlined text-gray-700 text-sm font-bold mb-2 mt-2" for="Service Description">Service Description</label>
                <div>
                    <input class="focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Describe the Service...">
                </div>
            </div>

            <div>
                <label class="block text-center underlined text-gray-700 text-sm font-bold mb-2 mt-2" for="Service Price">Service Pricing</label>
                <div>
                    <input class="focus:text-blue-400 focus:border focus:border-blue-300 p-4 w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="What is the price of the Service?">
                </div>
            </div>

            <button type="submit" class="mb-6 bg-blue-400 rounded hover:text-white p-3 w-full">
                Add Service
            </button>
        </form>
    </div>
</body>
@endsection
