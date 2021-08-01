<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $services = Service::where('user_id',auth()->user()->id)->get();

        return view('dashboard', [
            'services' => $services
        ]);
    }
}
