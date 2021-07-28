<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class LoginController extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('auth.login', [
            'services' => $services
        ]);
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login credentials');
        }
        if(auth()->user()->type == 0){
            return redirect()->route('services');
        }
        return redirect()->route('dashboard');
    }

    public function partnerLogin()
    {
        dd('login Attempt');
    }
}
