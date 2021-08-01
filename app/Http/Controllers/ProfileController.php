<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('profile.profile', [
            'services' => $services
        ]);
    }
}
