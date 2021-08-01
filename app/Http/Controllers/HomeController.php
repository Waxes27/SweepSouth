<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::distinct()->get(['type']);
        return view('home', [
            'services' => $services
        ]);
    }
}
