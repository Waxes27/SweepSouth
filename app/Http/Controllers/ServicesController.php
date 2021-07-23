<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::get();

        return view('services.services', [
            'services' => $services
        ]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function create_service(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'kind' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|integer'
        ]);
        // dd('verified');

        auth()->user()->services()->create([
            'type' => $request->kind,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('dashboard');


    }
}
