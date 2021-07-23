<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.services');
    }

    public function create()
    {
        return view('services.create');
    }

    public function create_service(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'type' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|integer'
        ]);

        Service::create([
            'type' => $request->kind,
            'description' => $request->description,
            'price' => $request->price,
        ]);


    }
}
