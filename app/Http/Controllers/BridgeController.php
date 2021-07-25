<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class BridgeController extends Controller
{
    public function partnerUser()
    {
        $services = Service::get();
        return view('auth.partner-user-bridge', [
            'services' => $services
        ]);
    }
}
