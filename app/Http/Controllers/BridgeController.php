<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BridgeController extends Controller
{
    public function partnerUser()
    {
        return view('auth.partner-user-bridge');
    }
}
