<?php

namespace App\Http\Controllers;

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
        dd($request);
    }
}
